@extends('layout.master')

@section('content')
<style>
    .bg-light{
       color: black;
    }
</style>
<div class="bg-light  p-5 rounded mt-3">

    <h2>Question 1/20</h2>
       <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Votre adresse mail:</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
  </div>
  
@endsection('content')