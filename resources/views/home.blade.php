@extends('layouts.main')

@section('content')

{{-- carousel started here --}}
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('assets/images/slider/slider1.jpg')}}" class="d-block w-100" style="height: 500px;  object-fit: cover;" alt="slider1">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/images/slider/slider2.png')}}" class="d-block w-100" style="height: 500px;  object-fit: cover;" alt="slider2">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/images/slider/slider4.jpg')}}" class="d-block w-100" style="height: 500px;  object-fit: cover;" alt="slider3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
{{-- carousel ended here --}}


{{-- product section start here --}}
<section class="my-5">
    <div class="container">
        <h1 class="text-center">Top Deals</h1>
        <div class="row theme-products">
            <div class="col-lg-3">
                <div class="card h-100">
                    <img src="{{ asset('assets/images/products/shoe2.jpg') }}" class="card-img-top" alt="product1">
                    <div class="card-body">
                        <h5 class="card-title text-center">Product 1</h5>
                        <h4 class="card-title text-center">Rs.4900.00</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card h-100">
                    <img src="{{ asset('assets/images/products/shoe3.png') }}" class="card-img-top" alt="product2">
                    <div class="card-body">
                        <h5 class="card-title text-center">Product 2</h5>
                        <h4 class="card-title text-center">Rs.4900.00</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card h-100">
                    <img src="{{ asset('assets/images/products/shoe5.jpg') }}" class="card-img-top" alt="product3">
                    <div class="card-body">
                        <h5 class="card-title text-center">Product 3</h5>
                        <h4 class="card-title text-center">Rs.4900.00</h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card h-100">
                    <img src="{{ asset('assets/images/products/shoe4.png') }}" class="card-img-top" alt="product4">
                    <div class="card-body">
                        <h5 class="card-title text-center">Product 4</h5>
                        <h4 class="card-title text-center">Rs.4900.00</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- product section ended here --}}
@endsection

