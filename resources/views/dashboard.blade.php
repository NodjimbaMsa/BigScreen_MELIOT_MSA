@extends('layouts.app')

@section('content')



<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <div class="btn-toolbar mb-2 mb-md-0">

      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar" class="align-text-bottom"></span>
        This week
      </button>
    </div>
  </div>

  <div class="d-flex justify-content-around flex-wrap flex-md-nowrap">
    <div class="wrapper">
      <canvas class="my-4 w-100" id="pie1" width="" height="350" aria-label="Hello ARIA World" role="img"></canvas>
    </div>
    <div class="wrapper">
      <canvas class="my-4 w-100" id="pie2" width="" height="350" aria-label="Hello ARIA World" role="img"></canvas>
    </div>
  </div>

  <div class="d-flex justify-content-around flex-wrap flex-md-nowrap">
    <div class="wrapper">
      <canvas class="my-4 w-100" id="pie3" width="" height="350" aria-label="Hello ARIA World" role="img"></canvas>
    </div>
    <div class="wrapper">
      <canvas class="my-4 w-100" id="radar1" width="" height="350" aria-label="Hello ARIA World" role="img"></canvas>
    </div>

  </div>

  <br>

</main>




@endsection('content')