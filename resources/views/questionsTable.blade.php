@extends('layouts.app')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<h2>Questions :</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Questions</th>
            </tr>
          </thead>
          <tbody>
          @forelse ($questions as $question)
            <tr>
              <td>{{ $question->id }}</td>
              <td>{{ $question->body }}</td>
            </tr>
        @empty
        <tr>
              <td>0</td>
              <td>Aucune Question</td>
            </tr>
@endforelse
          </tbody>
        </table>
      </div>
    </main>
@endsection('content')
