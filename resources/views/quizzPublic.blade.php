@extends('layout.master')

@section('content')
<style>
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
<form enctype="multipart/form-data" action="{{route('submitQuestion')}}" method="POST" class="my-8">

@error("L\'email a déjà été enregistré")
<div class="alert alert-danger alert-block">

<button type="button" class="close" data-dismiss="alert">×</button>

    <strong>L'email a déjà été utilisé</strong>

</div>
@enderror

@csrf

  @forelse ($questions as $question)

<div class="bg-gray-200 p-2 my-2 rounded-md shadow-sm">
    <h6 class="font-semibold">{{ $question->title }} / 20</h6>
    <div class="border-dashed border-2 border-gray-800 p-2 my-2">
        @if ($question->type === 'B')
                <label for="answer-{{ $question->id }}">{{ $question->body }}</label>
                <div class="points">
                <input name="answer{{ $question->id }}"
                    id="answer-{{ $question->id }}" class="form-control" type="text"
                    :value="old('answer'.($question->id))"/>
                </div>
                @error("answer".($question->id))
                    <span class="text-red-700" >{{ $message }}</span>
                @enderror
        @else
            <div class="mb-5">
                <div class="flex items-center space-x-6">
                <label for="answer-{{ $question->id }}">{{ $question->body }}</label>
                    <?php $i=1 ?>
                    <div class="points">
                    @foreach (explode(',', $question->choices) as $answer)
                        <div class="flex items-center">
                            <input type="radio" name="answer{{ $question->id }}" value="{{ $answer }}" {{(old('answer'.($question->id)) ==  $answer ) ? 'checked' : " " }}

                                id="answer{{ $question->id }}-{{ $i }}" class="h-5 w-5" />
                            <label for="answer{{ $question->id }}-{{ $i }}"
                                class="pl-3 text-base font-medium text-[#07074D]">
                               {{ $answer }}
                            </label>
                        </div>
                        <?php $i++ ?>
                    @endforeach
                    </div>

                </div>

            </div>
            @error("answer".($question->id))
                    <span class="text-red-700" >{{ $message }}</span>
            @enderror
        @endif

    </div>
</div>

@empty
<p>Aucune questions...</p>
@endforelse

<div class="col-sm-6">
        <button type="submit" class="btn btn-success mb-3">Envoyer le formulaire</button>
    </div>
</form>
</div>

@endsection('content')
