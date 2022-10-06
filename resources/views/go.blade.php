@extends('layout.master')

@section('content')


            <div id="buttonAll">

              <a href="{{ route('goQuiz') }}" class="btn-neon">
                Start the quiz
                <svg height="50" width="180">
                  <polyline points="0,0 180,0 180,50 0,50 0,00">
                  </polyline>
                </svg>
              </a>
            </div>
        
    
  
@endsection('content')