@extends('admin.includes.main')
@push('title')
<title>Dashboard-Admin</title>
    
@endpush

@section('content')
       
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="my-4">Dashboard</h1>  

                <div class="row">
                    <div class="col-xl-3 col-md-3">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body mx-auto">
                                <h4>Total Orders</h4>
                            </div>
                            <div class="my-2">
                                <h5 class="text-center text-dark">22</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-3">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body mx-auto">
                                <h4>Total Sales</h4>
                            </div>
                            <div class="my-2">
                                <h5 class="text-center text-dark">RS 20,000.00</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-3">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body mx-auto">
                                <h4>Total Users</h4>
                            </div>
                            <div class="my-2">
                                <h5 class="text-center text-dark">95</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-3">
                        <div class="card bg-info text-white mb-4">
                            <div class="card-body mx-auto">
                                <h4>Total Vendors</h4>
                            </div>
                            <div class="my-2">
                                <h5 class="text-center text-dark">54</h5>
                            </div>
                        </div>
                    </div>
                                            
                </div>

                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="d-flex">
                            <h4>Recent Orders</h4>
                            <div class="ms-auto">
                                <a href="{{url('/admin/orders')}}" class="btn btn-sm px-2 py-1 text-decoration-none theme-orange-btn">View All</a>
                            </div>
                        </div>
                    </div>                                           
                </div>

            </div>
        </main>

        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
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
                              <a href=""><span class="badge text-bg-primary ">Processing</span><a href="{{url('admin/orderdetail')}}" class="text-decoration-none mx-3">View Details</a>
                              </a>
                          </td>
                        </tr>

                        <tr>
                          <th scope="row">2</th>
                          <td>2024-12-12</td>
                          <td>Rs 50000.00</td>
                          <td>
                              <a href=""><span class="badge text-bg-info ">On the Way</span><a href="{{url('admin/orderdetail')}}" class="text-decoration-none mx-3">View Details</a>
                              </a>
                          </td>
                        </tr>

                        <tr>
                          <th scope="row">3</th>
                          <td>2024-12-12</td>
                          <td>Rs 50000.00</td>
                          <td>
                              <a href=""><span class="badge text-bg-success ">Delivered</span><a href="{{url('admin/orderdetail')}}" class="text-decoration-none mx-3">View Details</a>
                              </a>
                          </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
        


@endsection