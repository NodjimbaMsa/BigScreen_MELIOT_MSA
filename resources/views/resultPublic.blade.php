@extends('layout.master')

@section('content')
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap');
/* .btn-neon{

    font-family: 'Nunito', sans-serif;
} */

  .bg-light {
    color: black;
  }
  .points{
    border-width: 3px;
     border-style: dashed;
      border-color: gray;
      border-radius: 10px;

  }
  @media (max-width: 500px) {
    .points{
    border-width: 2px;
     border-style: dashed;
      border-color: gray;
      border-radius: 10px;

  }}
</style>
<div class="bg-light  p-5 rounded mt-3">

@forelse ($questions as $question)
@forelse ($results as $answer)

<div class="bg-gray-200 p-2 my-2 rounded-md shadow-sm">
    <h6 class="font-semibold">{{ $question->title }} / 20</h6>
    <div class="border-dashed border-2 border-gray-800 p-2 my-2">
        <p>{{ $answer }}</p>


    </div>
</div>

@empty

<p>Réponses incorrecte</p>

@endforelse

@empty
<p>Aucune questions...</p>
@endforelse
@endsection('content')
