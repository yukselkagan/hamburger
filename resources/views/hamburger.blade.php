@extends('layouts.common-layout')


@section('content')
<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-0 text-center" style="background-color:green; background-image: url('image/hamburger.jpg');"  >
    <div class="col-md-5 p-lg-5 mx-auto my-5"  >
      <h1 class="display-4 fw-normal text-light">Laravel Burger</h1>
      <p class="lead fw-normal text-light">Tasty burgers 2</p>
      <a class="btn btn-light btn-lg" href="order" style="background-color:black; color:white;" >Order</a>      
    </div>
  </div>





  <section class="denge" >
    <div class="container-fluid">
      <div id="myCarousel" class="carousel slide my-4" data-bs-ride="carousel" ">
        <div class="carousel-indicators">
          <x-carousel-indicator/>          
        </div>


      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/changeable/h1.png" height="900" width="100%" >
        </div>
        <x-carousel-item/>
      </div>



        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>


      </div>




    </div>

  </section>


</main>
@endsection

