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

  <h6>Question 1/20</h6>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Votre adresse mail:</label>
    <div class="points">
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
  </div>
  <h6>Question 2/20</h6>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
    <div class="points">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </div>
</div>

@endsection('content')