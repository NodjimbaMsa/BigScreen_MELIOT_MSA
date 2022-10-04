@extends('layout.master')

@section('content')
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap');
/* .btn-neon{
    
    font-family: 'Nunito', sans-serif;
} */

a{
    color: whitesmoke;
}
#all{
    border: none;
    display: flex;
    border-radius: 20px;
    width: 90%;
    margin: auto;
    box-shadow: 0px 1px 3px 0px #fff,
            1px 2px 4px 0px #fff,
            2px 4px 8px 0px #fff,
            2px 4px 16px 0px #fff;
}
#buttonAll{
    padding: 80px;
    text-align: center;
}
   



#center{
   
    position: relative;
    background-color: #000000;
    height: 80vh;
    width: 100%;
    border-radius: 20px;
    
    
}




/* Button */


.btn-neon{
    text-decoration: none;
    text-transform: uppercase;
    text-align: center;
    font-size: 14px;
    line-height: 50px;
    color: #f5f5f5;
    width: 180px;
    transition: 1s;
    transition-delay: .9s;
    position: relative;
    display: inline-block;
    border-radius: 50px;
}

.btn-neon:hover{
    box-shadow: 0 0 10px #fdee00,
                0 0 40px #fdee00,
                0 0 80px #fdee00;
    background-color: #fdee00;
    
}

.btn-neon:hover polyline{
    stroke-dashoffset: -460;
    
}

.btn-neon svg{
    position: absolute;
    top:0;
    left:0;
    right:0;
    bottom:0;
    width: 100%;
    height: 100%;
    border-radius: 50px;
    
}

.btn-neon svg polyline{
    fill: transparent;
    stroke: #fdee00;
    stroke-width: 2px;
    stroke-dasharray: 40 460;
    stroke-dashoffset: 40;
    transition:  .8s ease-in-out;
    
}
</style>
<p class="lead">Results</p>
<div class="resultP">

    <!-- CENTRAL BIG WINDOWS -->
    <section id="all">
        <!-- Part on the left -->
        <div id="center">
           
            <div id="buttonAll">

              <a href="#" class="btn-neon">
                Print
                <svg height="50" width="180">
                  <polyline points="0,0 180,0 180,50 0,50 0,00">
                  </polyline>
                </svg>
              </a>
            </div>

        </div>
    </section>
</div>
@endsection('content')