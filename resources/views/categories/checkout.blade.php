@extends('layouts.main')
@push('title')
    <title>Checkout Page</title>
@endpush
@section('content')

<div class="container-fluid bg-light p-4">
    <h1 class="text-center"><i class="fa-solid fa-cart-shopping"></i>Checkout Page</h1>
</div>


{{-- Billing Information --}}
<section>
    <div class="container mt-4 bg-light p-5">
        <h2>Billing Details</h2>
        <div class="row">
            <div class="col-lg-12">
                <form action="">
                    <div class="row my-2">
                        <div class="col-lg-12 mb-3">
                            <select class="form-select form-control form-control-lg" aria-label="Default select example">
                                <option selected>Select Your Country</option>
                                <option value="1">Nepal</option>
                                <option value="2">India</option>
                                <option value="3">UK</option>
                            </select>
                        </div>
                            
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control form-control-lg" id="firstname" placeholder="First Name">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control form-control-lg" id="lastname" placeholder="Last Name">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <input type="number" class="form-control form-control-lg" id="phone" placeholder="Phone Number">
                        </div>
                        
                        <div class="col-lg-6 mb-3">
                            <input type="email" class="form-control form-control-lg" id="email" placeholder="Email Here">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <input type="number" class="form-control form-control-lg" id="pin" placeholder="Pin Code">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <input type="number" class="form-control form-control-lg" id="landmark" placeholder="Land Mark">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <select class="form-select form-control form-control-lg" aria-label="Default select example">
                                <option selected>Select Your Country</option>
                                <option value="1">Nepal</option>
                                <option value="2">India</option>
                                <option value="3">UK</option>
                            </select>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <select class="form-select form-control form-control-lg" aria-label="Default select example">
                                <option selected>Select Your State</option>
                                <option value="1">Kathmandu</option>
                                <option value="2">Mumbai</option>
                                <option value="3">Wessex</option>
                            </select>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <textarea class="form-control form-control-lg" id="address" placeholder="Your Address" rows="3"></textarea>
                        </div>
                            
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
{{-- Ended Billing Information --}}


{{-- Your Order List --}}
<section>
    <div class="container">
        <h3 class="mt-2">Your Orders</h3>
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Subtotal</th>
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
                        <td>01</td>
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
                        <td>02</td>
                        <td>Rs 4000.00</td>
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
                        <td>03</td>
                        <td>Rs 5000.00</td>
                        <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                      </tr>
                      
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>
{{-- Ended Your Order List --}}

@endsection