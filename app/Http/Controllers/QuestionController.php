<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Requests\QuestionRequest;
use App\Models\Respondent;
use App\Models\Response;

class QuestionController extends Controller
{

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

     public function startQuestion(Request $request)
     {
        $questions = Question::all();

        return view('quizzPublic', compact('questions'));
     }

     /**
     * @param \Illuminate\Http\QuestionRequest $request
     * @return \Illuminate\Http\Response
     */

    public function submitQuestion(QuestionRequest $request)
    {
        $validated = $request->validated();

        $email = $request->answer1;
        $verificationEmail = Respondent::getByEmail($email);

        if ($verificationEmail) { //Email existe déjà
            return back()->with('error','L\'email a déjà été enregistré');
        } else {

            $respondent = Respondent::create([
                'email' => $email,
            ]);

            $questions = Question::all();
            foreach ($questions as $key => $question) {
                $response = new Response();
                $response->question_id = $question->id;
                $response->respondent_id = $respondent->id;
                $response->answer = $request->input('answer'.$question->id);
                $response->save();
            }

            $responses = Response::getByRespondentId($respondent->id);

            $results = [];

            foreach($responses as $response) {
                $results[] = $response->answer;
            }

            return redirect()->route('resultQuestion', ['id' => $respondent->id]);
        }
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function resultQuestion(Request $request, $id)
    {
        $responses = Response::getByRespondentId($id);
        $questions = Question::all();

        $results = [];
        foreach ($responses as $response) {
            $results[] = $response->answer;
        }


        return view('resultPublic', compact('questions', 'results'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Question::class);

        $search = $request->get('search', '');

        $questions = Question::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.questions.index', compact('questions', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Question::class);

        return view('app.questions.create');
    }

    /**
     * @param \App\Http\Requests\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Question::class);

        $validated = $request->validated();

        $question = Question::create($validated);

        return redirect()
            ->route('questions.edit', $question)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Question $question
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Question $question)
    {
        $this->authorize('view', $question);

        return view('app.questions.show', compact('question'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Question $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Question $question)
    {
        $this->authorize('update', $question);

        return view('app.questions.edit', compact('question'));
    }

    /**
     * @param \App\Http\Requests\Request $request
     * @param \App\Models\Question $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $this->authorize('update', $question);

        $validated = $request->validated();

        $question->update($validated);

        return redirect()
            ->route('questions.edit', $question)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Question $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Question $question)
    {
        $this->authorize('delete', $question);

        $question->delete();

        return redirect()
            ->route('questions.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
