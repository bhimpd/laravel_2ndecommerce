@extends('layouts.main')
@push('title')
    <title>Detail Page</title>
@endpush
@section('content')

<div class="container-fluid bg-light p-4">
    <h1 class="text-center"><i class="fa-brands fa-product-hunt"></i>Product Detail</h1>
</div>

<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="{{ asset('assets/images/products/shoe4.png') }}" class="rounded img-fluid" alt="...">   
            </div>

            <div class="col-lg-8">
                <h2>Mens Shoe</h2>
                <h4>Rs 5,000.00</h4>
                <div>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
                <div>
                    <div class="d-flex flex-row mb-3">
                        <div class="p-2"><h5>Quantity</h5></div>
                        <div class="p-2">
                            <span class="btn btn-primary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                            <span class="mx-2">01</span>
                            <span class="btn btn-primary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>

                        </div>
                       
                      </div>
                </div>
                <div>
                    <a href="" class="btn theme-green-btn text-light rounded-pill me-1">Add to Cart</a>
                    <a href="" class="btn theme-orange-btn text-light rounded-pill me-1">Buy Now</a>
                </div>
            </div>

            <div class="my-4">
                <h4>Product Description</h4>
                <p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                <p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            </div>
        
        
            {{-- related Products --}}
            <div class="my-4">
                <section class="my-3 recently-viewed-section py-3">
                    <div class="container">
                        
                        <div class="d-flex">
                            <div class="flex-grow-1"><h2>Related Products</h2></div>
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
            </div>
            {{-- Ended related Products --}}

            <hr>

            {{-- Customer Review --}}
            <section>
                <h2>Customer Review</h2>
                <div class="row mt-4">
                    <div class="col-lg-2">
                        <img src="{{ asset('assets/images/products/shoe4.png') }}" class="rounded-circle img-fluid" alt="...">  
                    </div>

                    <div class="col-lg-10">
                        <div>
                            <h4>John Doe</h4>
                            <div>
                                <div class="d-flex">
                                    <div class="flex-grow-1"><h6>Jan 09,2024</h6></div>
                                    <div>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                            </p>
                            <div>
                                <a href="" class="btn btn-sm theme-orange-btn text-light rounded-pill me-1">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row mt-4">
                    <div class="col-lg-2">
                        <img src="{{ asset('assets/images/products/shoe4.png') }}" class="rounded-circle img-fluid" alt="...">  
                    </div>

                    <div class="col-lg-10">
                        <div>
                            <h4>Michale Jack</h4>
                            <div>
                                <div class="d-flex">
                                    <div class="flex-grow-1"><h6>Dec 09,2022</h6></div>
                                    <div>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                            </p>
                            <div>
                                <a href="" class="btn btn-sm theme-orange-btn text-light rounded-pill me-1">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Ended Customer Review --}}


            {{-- Add Review --}}
            <section>
                <div class="container mt-4 bg-light p-5">
                    <h2>Add a Review</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="">
                                <div id="rateproduct" class="form-text">Rate this Product
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>

                                <div class="row my-2">
                                        
                                    <div class="col-lg-6 mb-3">
                                        <input type="text" class="form-control form-control-lg" id="name" placeholder="Name Here">

                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <input type="email" class="form-control form-control-lg" id="email" placeholder="Email Here">

                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <textarea class="form-control form-control-lg" id="message" placeholder="Your Message" rows="3"></textarea>

                                    </div>

                                    <div>
                                        <a href="" class="btn theme-orange-btn text-light rounded-pill me-1">Post a comment</a>
                                    </div>
                                    
                                        
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Ended Add Review --}}


        </div>
    </div>


</section>


@endsection