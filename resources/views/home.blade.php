@extends('layouts.main')
@push('title')
    <title>Home Page</title>
@endpush
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
<section class="my-3 products-section py-3">
    <div class="container">
        
        <div class="d-flex">
            <div class="p-2 flex-grow-1"><h2>Top Deals</h2></div>
            <div class="p-2"><a href="" class="btn theme-green-btn text-light btn-sm">View All</a></div>
        </div>
        <div class="row theme-products">
            <div class="col-lg-3">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products/shoe8.png') }}" class="card-img-top" alt="product1">
                        <div class="card-body">
                            <h5 class="card-title text-center">Product 1</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3">
                <a href="" class="text-decoration-none">             
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products/shoe3.png') }}" class="card-img-top" alt="product2">
                        <div class="card-body">
                            <h5 class="card-title text-center">Product 2</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3">
                <a href="" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products/shoe5.jpg') }}" class="card-img-top" alt="product3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Product 3</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3">
                <a href="" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products/shoe4.png') }}" class="card-img-top" alt="product4">
                        <div class="card-body">
                            <h5 class="card-title text-center">Product 4</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
{{-- product section ended here --}}


{{-- Best of electronice section start here --}}
<section class="my-3 recently-viewed-section py-3">
    <div class="container">
        
        <div class="d-flex">
            <div class="p-2 flex-grow-1"><h2>Best of Electronics</h2></div>
            <div class="p-2"><a href="" class="btn theme-green-btn text-light btn-sm">View All</a></div>
        </div>
        <div class="row theme-products">
            <div class="col-lg-3">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/electronics/electronic1.jpg') }}" class="card-img-top" alt="product1">
                        <div class="card-body">
                            <h5 class="card-title text-center">Electronic 1</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3">
                <a href="" class="text-decoration-none">             
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/electronics/electronic6.png') }}" class="card-img-top" alt="product2">
                        <div class="card-body">
                            <h5 class="card-title text-center">Electronic 2</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3">
                <a href="" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/electronics/electronic3.jpg') }}" class="card-img-top" alt="product3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Electronic 3</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3">
                <a href="" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/electronics/electronic5.jpg') }}" class="card-img-top" alt="product4">
                        <div class="card-body">
                            <h5 class="card-title text-center">Electronic 4</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
{{-- Best of Electronics section ended here --}}


{{-- Popular Categories section start here --}}
<section class="my-3 recently-viewed-section py-3">
    <div class="container">
        
        <div class="d-flex">
            <div class="p-2 flex-grow-1"><h2>Popular Categories</h2></div>
            <div class="p-2"><a href="" class="btn theme-green-btn text-light btn-sm">View All</a></div>
        </div>
        <div class="row theme-products">
            <div class="col-lg-3">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/electronics/electronic1.jpg') }}" class="card-img-top" alt="product1">
                        <div class="card-body">
                            <h5 class="card-title text-center">Popular 1</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3">
                <a href="" class="text-decoration-none">             
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products/shoe3.png') }}" class="card-img-top" alt="product2">
                        <div class="card-body">
                            <h5 class="card-title text-center">Popular 2</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3">
                <a href="" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/electronics/electronic5.jpg') }}" class="card-img-top" alt="product3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Popular 3</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3">
                <a href="" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products/shoe5.jpg') }}" class="card-img-top" alt="product4">
                        <div class="card-body">
                            <h5 class="card-title text-center">Popular 4</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
{{-- Popular section ended here --}}



{{-- Recently viewed section start here --}}
<section class="my-3 recently-viewed-section py-3">
    <div class="container">
        
        <div class="d-flex">
            <div class="p-2 flex-grow-1"><h2>Recently Viewed</h2></div>
            <div class="p-2"><a href="" class="btn theme-green-btn text-light btn-sm">View All</a></div>
        </div>
        <div class="row theme-products">
            <div class="col-lg-3">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products/shoe8.png') }}" class="card-img-top" alt="product1">
                        <div class="card-body">
                            <h5 class="card-title text-center">Product 5</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3">
                <a href="" class="text-decoration-none">             
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products/shoe3.png') }}" class="card-img-top" alt="product2">
                        <div class="card-body">
                            <h5 class="card-title text-center">Product 6</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3">
                <a href="" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products/shoe5.jpg') }}" class="card-img-top" alt="product3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Product 7</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3">
                <a href="" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products/shoe4.png') }}" class="card-img-top" alt="product4">
                        <div class="card-body">
                            <h5 class="card-title text-center">Product 8</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
{{-- Recently viewed section ended here --}}

@endsection

