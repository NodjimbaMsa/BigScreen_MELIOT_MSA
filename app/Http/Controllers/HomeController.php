<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Response;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the homepage of the application.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function homepage()
    {
        return view('layout/master');
    }



    // public function masterPage()
    // {
    //     return view('layout/master');
    // }
    public function questAdmin()
    {
        $questions = Question::all();

        return view('questionsTable', compact('questions'));
    }

    public function resultAdmin()
    {
        $questions = Question::all();
        $answers = Response::all();

        $link = [];

        foreach($answers as $answer) {
            $link[$answer->respondent_id]= Response::getByRespondentId($answer->respondent_id);
        }
        return view('resultAdmin',['answers' => $link, 'questions' => $questions]);
    }

}
