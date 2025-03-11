@extends('layouts.main')
@push('title')
    <title>Category Page</title>
@endpush
@section('content')

<div class="container-fluid bg-light p-4">
    <h1 class="text-center"><i class="fa-solid fa-layer-group"></i>Categories</h1>
</div>

{{-- categories section start here --}}
<section class="my-3 categories-section py-3">
    <div class="container">
        <div class="row theme-products">
            <div class="col-lg-3 mb-3">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products/shoe8.png') }}" class="card-img-top" alt="product1">
                        <div class="card-body">
                            <h5 class="card-title text-center">Category 1</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 mb-3">
                <a href="" class="text-decoration-none">             
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products/shoe3.png') }}" class="card-img-top" alt="product2">
                        <div class="card-body">
                            <h5 class="card-title text-center">Category 2</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 mb-3">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products/shoe8.png') }}" class="card-img-top" alt="product1">
                        <div class="card-body">
                            <h5 class="card-title text-center">Category 1</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 mb-3">
                <a href="" class="text-decoration-none">             
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products/shoe3.png') }}" class="card-img-top" alt="product2">
                        <div class="card-body">
                            <h5 class="card-title text-center">Category 2</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 mb-3">
                <a href="" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products/shoe5.jpg') }}" class="card-img-top" alt="product3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Category 3</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 mb-3">
                <a href="" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products/shoe5.jpg') }}" class="card-img-top" alt="product3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Category 3</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 mb-3">
                <a href="" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products/shoe4.png') }}" class="card-img-top" alt="product4">
                        <div class="card-body">
                            <h5 class="card-title text-center">Category 4</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 mb-3">
                <a href="#" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products/shoe8.png') }}" class="card-img-top" alt="product1">
                        <div class="card-body">
                            <h5 class="card-title text-center">Category 1</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 mb-3">
                <a href="" class="text-decoration-none">             
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products/shoe3.png') }}" class="card-img-top" alt="product2">
                        <div class="card-body">
                            <h5 class="card-title text-center">Category 2</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 mb-3">
                <a href="" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/products/shoe5.jpg') }}" class="card-img-top" alt="product3">
                        <div class="card-body">
                            <h5 class="card-title text-center">Category 3</h5>
                            <h4 class="card-title text-center">Rs.4900.00</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
{{-- categories section ended here --}}





@endsection
