@extends('admin.includes.main')
@push('title')
<title>Dashboard-Order History</title>
    
@endpush

@section('content')
      
<div id="layoutSidenav_content">
    <main>
            <div class="container">
                <div class="card p-3 border border-primary my-2">
                    <div class="row ">
                        <div class="col-xl-12 col-md-12">
                            <div class="d-flex">
                                <h4> Order</h4>
                               
                            </div>
                            <div>
                              <table id="datatablesSimple">
                                <thead>
                                  <tr>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
    
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Victor Memo</td>
                                    <td>Rs 50001.00</td>
                                    <td>
                                        <a href="{{url('user/detail')}}"><span class="badge text-bg-primary ">Processing</span><a href="{{url('user/detail')}}" class="text-decoration-none mx-3">View Details</a>
                                        </a>
                                    </td>
                                    <td>
                                        {{-- <a href="" class="btn btn-sm btn-warning"><i class="fa-solid fa-truck"></i></a>
                                        <a href="" class="btn btn-sm btn-success"><i class="fa-solid fa-check"></i></a> --}}
                                        <a href="{{url('admin/orderdetail')}}" class="btn btn-sm btn-info"><i class="fa-solid fa-eye"></i></a>    
                                    </td>
                                  </tr>

                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Victor Memo</td>
                                    <td>Rs 50001.00</td>
                                    <td>
                                        <a href="{{url('user/detail')}}"><span class="badge text-bg-primary ">Processing</span><a href="{{url('user/detail')}}" class="text-decoration-none mx-3">View Details</a>
                                        </a>
                                    </td>
                                    <td>
                                        {{-- <a href="" class="btn btn-sm btn-warning"><i class="fa-solid fa-truck"></i></a>
                                        <a href="" class="btn btn-sm btn-success"><i class="fa-solid fa-check"></i></a> --}}
                                        <a href="" class="btn btn-sm btn-info"><i class="fa-solid fa-eye"></i></a>    
                                    </td>
                                  </tr>

                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Victor Memo</td>
                                    <td>Rs 50001.00</td>
                                    <td>
                                        <a href="{{url('user/detail')}}"><span class="badge text-bg-primary ">Processing</span><a href="{{url('user/detail')}}" class="text-decoration-none mx-3">View Details</a>
                                        </a>
                                    </td>
                                    <td>
                                        {{-- <a href="" class="btn btn-sm btn-warning"><i class="fa-solid fa-truck"></i></a>
                                        <a href="" class="btn btn-sm btn-success"><i class="fa-solid fa-check"></i></a> --}}
                                        <a href="" class="btn btn-sm btn-info"><i class="fa-solid fa-eye"></i></a>    
                                    </td>
                                  </tr>  
                                                                  
                                </tbody>
                              </table>
                            </div>
                        </div>                      
                    </div>
                </div>
            </div>
        </main>


@endsection