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

  <h2>Question 1/20</h2>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Votre adresse mail :</label>
    <div class="points">
      <input type="email" value="mike@gmail.com" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
  </div>
  <h2>Question 2/20</h2>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Votre âge :</label>
    <div class="points">
    <input type="number" class="form-control" id="exampleFormControlInput2" placeholder="18 ans">
    </div>
  </div>
</div>
@endsection('content')