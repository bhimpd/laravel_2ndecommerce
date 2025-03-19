@extends('vendor.includes.main')
@push('title')
<title>Dashboard - Add Product</title>
    
@endpush

@section('content')
      
<div id="layoutSidenav_content">
    <main>
        <div class="container my-5">
            <div class="row my-5">
                <div class="col-xl-12 col-md-12">
                    <div class="d-flex">
                        <h4> View Products</h4>
                        
                    </div>
                    <div>
                        <table id="datatablesSimple">
                            <thead>
                              <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Category</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
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
                                <td>Electronics</td>
                                <td> 250</td>
                                <td>Excellent</td>
                                <td>
                                    <a href="{{url('vendor/editproduct')}}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>

                                </td>
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
                                <td>Rs 2500.00</td>
                                <td>Electronics</td>
                                <td> 250</td>
                                <td>Excellent</td>
                                <td>
                                    <a href="{{url('vendor/editproduct')}}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>

                                </td>
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
                                <td>Rs 2500.00</td>
                                <td>Electronics</td>
                                <td> 250</td>
                                <td>Excellent</td>
                                <td>
                                    <a href="{{url('vendor/editproduct')}}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>

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