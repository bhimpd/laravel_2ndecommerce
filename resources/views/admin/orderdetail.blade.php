@extends('admin.includes.main')
@push('title')
<title>Dashboard-Order Detail</title>
    
@endpush

@section('content')
      
<div id="layoutSidenav_content">
    <main>
            <div class="container">
                <div class="row my-5">
                    <h6>Order Details : Jan 09,2025 (3 Products)</h6>

                    <div class="col-xl-5 col-md-5 m-2 p-3 border border-primary">                       
                        <h5 class="text-dark y-3">Customer Information</h5>
                        <span class="text-dark"><strong>Name: </strong>Victor Memo </span><br>
                        <span class="text-dark"><strong>Email: </strong>bhim.lamichhane@intuji.com </span><br>
                        <span class="text-dark"><strong>Shipping Address: </strong>22 Street,Pokhara </span><br>
                        <span class="text-dark"><strong>Phone: </strong> +977-9814495185</span><br>                           
                    </div>   

                    <div class="col-xl-5 col-md-5 m-2 p-3 border border-primary">
                        <h5 class="text-dark y-3">Order Summary</h5>
                        <span class="text-dark"><strong>Order ID: </strong>01 </span><br>
                        <span class="text-dark"><strong>Payment Method:</strong> Cash On Delivery</span><br> 
                        <span class="text-dark"><strong>Payment Method:</strong>  <span class="badge text-bg-success">Completed</span>  <br>                         
                        <span class="text-dark"><strong>Sub Total:</strong> Rs 50000.00</span><br>   
                       <hr>
                        <h5 class="text-dark"><strong>Total:</strong> Rs 12000.00</h5><br>                           
                    </div>                    
                </div>

                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="position-relative m-4">
                            <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 1px;">
                                <div class="progress-bar" style="width: 33%"></div>
                            </div>
                            <button type="button" class="position-absolute top-0 translate-middle btn btn-sm btn-primary rounded-pill" style="left: 0%; width: 2rem; height:2rem;">1</button>

                            <button type="button" class="position-absolute top-0 translate-middle btn btn-sm btn-primary rounded-pill" style="left: 33%; width: 2rem; height:2rem;">2</button>
                           
                            <button type="button" class="position-absolute top-0 translate-middle btn btn-sm btn-secondary rounded-pill" style="left: 66%; width: 2rem; height:2rem;">3</button>

                            <button type="button" class="position-absolute top-0 translate-middle btn btn-sm btn-secondary rounded-pill" style="left: 100%; width: 2rem; height:2rem;">4</button>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="d-flex">
                            <div class="p-1 ms-5 flex-fill">Received</div>
                            <div class="p-1 ms-5 flex-fill">Processing</div>
                            <div class="p-1 ms-5 flex-fill">On the Way</div>
                            <div class="p-1 ms-5 flex-fill">Delivered</div>
                        </div>
                    </div>

                </div>
                
                <hr>

                <div class="row mt-4">
                    <div class="col-lg-12">
                        <table id="datatablesSimple">
                            <thead>
                              <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Subtotal</th>
                                <th scope="col">Status</th>
                                {{-- <th scope="col">Action</th> --}}
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
                                <td> <span class="badge text-bg-success">Delivered</span>  </td>
                                {{-- <td>
                                    <a href="" class="btn btn-sm btn-warning"><i class="fa-solid fa-truck"></i></a>
                                    <a href="" class="btn btn-sm btn-success"><i class="fa-solid fa-check"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-ban"></i></a>    
                                </td> --}}
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
                                <td> <span class="badge text-bg-warning">Shipped</span>  </td>
                                {{-- <td>
                                    <a href="" class="btn btn-sm btn-warning"><i class="fa-solid fa-truck"></i></a>
                                    <a href="" class="btn btn-sm btn-success"><i class="fa-solid fa-check"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-ban"></i></a>    
                                </td> --}}
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
                                <td> <span class="badge text-bg-danger">Cancelled</span>  </td>

                                {{-- <td>
                                    <a href="" class="btn btn-sm btn-warning"><i class="fa-solid fa-truck"></i></a>
                                    <a href="" class="btn btn-sm btn-success"><i class="fa-solid fa-check"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-ban"></i></a>    
                                </td> --}}
                              </tr>
                                      
                            </tbody>
                        </table>
                    </div>
        
                </div>
            </div>
        </main>


@endsection