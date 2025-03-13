@extends('layouts.main')
@push('title')
    <title>Cart List</title>
@endpush
@section('content')

<div class="container-fluid bg-light p-4">
    <h1 class="text-center"><i class="fa-solid fa-cart-shopping"></i>Cart List</h1>
</div>


{{-- Cart List Section  --}}
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Remove</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>
                            <div class="d-flex">
                                <div>
                                    <img src="{{ asset('assets/images/products/shoe4.png') }}" style="width: 80px"> 
                                </div>
                               <div>
                                    <h6 class="p-3">Product 1</h6>
                               </div>
                               
                            </div>
                        </th>
                        <td>Rs 2500.00</td>
                        <td>
                            <div class="d-flex flex-row mb-3">
                                <div>
                                    <span class="btn btn-primary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                                    <span class="mx-2">01</span>
                                    <span class="btn btn-primary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </div>
                        </td>
                        <td>Rs 2500.00</td>
                        <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                      </tr>

                      <tr>
                        <th>
                            <div class="d-flex">
                                <div>
                                    <img src="{{ asset('assets/images/products/shoe3.png') }}" style="width: 80px"> 
                                </div>
                               <div>
                                    <h6 class="p-3">Product 2</h6>
                               </div>
                               
                            </div>
                        </th>
                        <td>Rs 4000.00</td>
                        <td>
                            <div class="d-flex flex-row mb-3">
                                <div>
                                    <span class="btn btn-primary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                                    <span class="mx-2">03</span>
                                    <span class="btn btn-primary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </div>
                        </td>
                        <td>Rs 4000.00</td>
                        <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                      </tr>

                      <tr>
                        <th>
                            <div class="d-flex">
                                <div>
                                    <img src="{{ asset('assets/images/products/shoe5.jpg') }}" style="width: 80px"> 
                                </div>
                               <div>
                                    <h6 class="p-3">Product 3</h6>
                               </div>
                               
                            </div>
                        </th>
                        <td>Rs 5000.00</td>
                        <td>
                            <div class="d-flex flex-row mb-3">
                                <div>
                                    <span class="btn btn-primary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                                    <span class="mx-2">01</span>
                                    <span class="btn btn-primary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </div>
                        </td>
                        <td>Rs 5000.00</td>
                        <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                      </tr>
                      
                    </tbody>
                </table>
            </div>

            <div class="col-lg-5 ms-auto py-2">
                <div>
                    <h3>Price Details</h3><hr>
                </div>
                <div class="d-flex">
                    <div><h5>Subtotal</h5></div>
                    <div class="ms-auto">Rs 10000.00</div>
                </div>
                <div class="d-flex">
                    <div><h5>Discount</h5></div>
                    <div class="ms-auto">Rs 100.00</div>
                </div>
                <div class="d-flex">
                    <div><h5>Delivery Charge</h5></div>
                    <div class="ms-auto">Free</div>
                </div><hr>
                <div class="d-flex">
                    <div><h4>Total </h4></div>
                    <div class="ms-auto">Rs 900</div>
                </div><hr>
                <div class="mt-4"> <a href="{{url('/checkout/product')}}" class="btn theme-green-btn text-light rounded-pill me-1 w-100">Proceed To Checkout</a></div>
            </div>
        </div>
    </div>
</section>
{{-- Ended Cart List Section  --}}


@endsection