@extends('user.layouts.main')
@push('title')
<title>Dashboard-User</title>
    
@endpush

@section('content')
       
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="my-4">Dashboard</h1>  

                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="card bg-info text-white mb-4">
                            <div class="card-body mx-auto">
                                <img class="img-fluid" src="{{asset('assets/images/user/user.png')}}" style="width:200px" alt="">
                            </div>
                            <div class="my-3">
                                <h5 class="text-center text-dark">User Name</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-6">
                        <div class="card bg-info text-white mb-4" style="height:300px">
                            <div class="card-body mx-auto">
                                <h5 class="text-dark text-center mb-3">Billing Address</h5>
                                <span class="text-dark">Reference site about Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima dicta illum animi amet, itaque ipsa rerum facere. </span><br><br>
                                <span class="text-dark"><strong>Email: bhim.lamichhane@intuji.com </strong></span><br>
                                <span class="text-dark"><strong>Phone: +977-9814495185</strong></span><br>
                            </div>
                            
                        </div>
                    </div>
                                            
                </div>

                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="d-flex">
                            <h4>Recent Orders</h4>
                            <div class="ms-auto">
                                <a class="btn btn-sm px-2 py-1 text-decoration-none theme-orange-btn">View All</a>
                            </div>
                        </div>
                        <div>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>2024-12-12</td>
                                    <td>Rs 50000.00</td>
                                    <td>
                                        <a href=""><span class="badge text-bg-primary ">Processing</span><a href="" class="text-decoration-none mx-3">View Details</a>
                                        </a>
                                    </td>
                                  </tr>

                                  <tr>
                                    <th scope="row">1</th>
                                    <td>2024-12-12</td>
                                    <td>Rs 50000.00</td>
                                    <td>
                                        <a href=""><span class="badge text-bg-info ">On the Way</span><a href="" class="text-decoration-none mx-3">View Details</a>
                                        </a>
                                    </td>
                                  </tr>

                                  <tr>
                                    <th scope="row">1</th>
                                    <td>2024-12-12</td>
                                    <td>Rs 50000.00</td>
                                    <td>
                                        <a href=""><span class="badge text-bg-success ">Delivered</span><a href="" class="text-decoration-none mx-3">View Details</a>
                                        </a>
                                    </td>
                                  </tr>
                                  
                                </tbody>
                              </table>
                        </div>
                    </div>

                                            
                </div>

            </div>
        </main>
        


@endsection