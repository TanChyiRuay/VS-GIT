@extends('layout')
@section('content')
<!--Carousel   -->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://wowslider.com/sliders/demo-77/data1/images/idaho239691_1920.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://wowslider.com/sliders/demo-77/data1/images/road220058.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://wowslider.com/sliders/demo-77/data1/images/field175959_1920.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- end Carousel   -->
@endsection