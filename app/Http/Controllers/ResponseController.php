<?php

namespace App\Http\Controllers;

use App\Models\Response;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Requests\ResponseStoreRequest;
use App\Http\Requests\ResponseUpdateRequest;

class ResponseController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Response::class);

        $search = $request->get('search', '');

        $responses = Response::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.responses.index', compact('responses', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Response::class);

        $questions = Question::pluck('title', 'id');

        return view('app.responses.create', compact('questions'));
    }

    /**
     * @param \App\Http\Requests\ResponseStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResponseStoreRequest $request)
    {
        $this->authorize('create', Response::class);

        $validated = $request->validated();

        $response = Response::create($validated);

        return redirect()
            ->route('responses.edit', $response)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Response $response
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Response $response)
    {
        $this->authorize('view', $response);

        return view('app.responses.show', compact('response'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Response $response
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Response $response)
    {
        $this->authorize('update', $response);

        $questions = Question::pluck('title', 'id');

        return view('app.responses.edit', compact('response', 'questions'));
    }

    /**
     * @param \App\Http\Requests\ResponseUpdateRequest $request
     * @param \App\Models\Response $response
     * @return \Illuminate\Http\Response
     */
    public function update(ResponseUpdateRequest $request, Response $response)
    {
        $this->authorize('update', $response);

        $validated = $request->validated();

        $response->update($validated);

        return redirect()
            ->route('responses.edit', $response)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Response $response
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Response $response)
    {
        $this->authorize('delete', $response);

        $response->delete();

        return redirect()
            ->route('responses.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
