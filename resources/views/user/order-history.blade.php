@extends('user.layouts.main')
@push('title')
<title>Order History</title>
    
@endpush

@section('content')
       
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
              
                <div class="row my-5">
                    <div class="col-xl-12 col-md-12">
                        <div class="d-flex">
                            <h4> Order History</h4>
                           
                        </div>
                        <div>
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
                                <td>Rs 50001.00(2 Products)</td>
                                <td>
                                    <a href="{{url('user/detail')}}"><span class="badge text-bg-primary ">Processing</span><a href="{{url('user/detail')}}" class="text-decoration-none mx-3">View Details</a>
                                    </a>
                                </td>
                              </tr>

                              <tr>
                                <th scope="row">2</th>
                                <td>2024-12-12</td>
                                <td>Rs 50000.00(2 Products)</td>
                                <td>
                                    <a href="{{url('user/detail')}}"><span class="badge text-bg-info ">On the Way</span><a href="{{url('user/detail')}}" class="text-decoration-none mx-3">View Details</a>
                                    </a>
                                </td>
                              </tr>

                              <tr>
                                <th scope="row">3</th>
                                <td>2024-12-12</td>
                                <td>Rs 50000.00(2 Products)</td>
                                <td>
                                    <a href="{{url('user/detail')}}"><span class="badge text-bg-success ">Delivered</span><a href="{{url('user/detail')}}" class="text-decoration-none mx-3">View Details</a>
                                    </a>
                                </td>
                              </tr>

                              <tr>
                                <th scope="row">4</th>
                                <td>2024-12-12</td>
                                <td>Rs 50000.00(2 Products)</td>
                                <td>
                                    <a href=""><span class="badge text-bg-success ">Delivered</span><a href="{{url('user/detail')}}" class="text-decoration-none mx-3">View Details</a>
                                    </a>
                                </td>
                              </tr>

                              <tr>
                                <th scope="row">5</th>
                                <td>2024-12-12</td>
                                <td>Rs 50000.00(2 Products)</td>
                                <td>
                                    <a href=""><span class="badge text-bg-success ">Delivered</span><a href="{{url('user/detail')}}" class="text-decoration-none mx-3">View Details</a>
                                    </a>
                                </td>
                              </tr>

                              <tr>
                                <th scope="row">6</th>
                                <td>2024-12-12</td>
                                <td>Rs 50000.00(2 Products)</td>
                                <td>
                                    <a href=""><span class="badge text-bg-success ">Delivered</span><a href="{{url('user/detail')}}" class="text-decoration-none mx-3">View Details</a>
                                    </a>
                                </td>
                              </tr>

                              <tr>
                                <th scope="row">1</th>
                                <td>2024-12-12</td>
                                <td>Rs 50000.00(2 Products)</td>
                                <td>
                                    <a href="{{url('user/detail')}}"><span class="badge text-bg-primary ">Processing</span><a href="" class="text-decoration-none mx-3">View Details</a>
                                    </a>
                                </td>
                              </tr>

                              <tr>
                                <th scope="row">2</th>
                                <td>2024-12-12</td>
                                <td>Rs 50000.00(2 Products)</td>
                                <td>
                                    <a href=""><span class="badge text-bg-info ">On the Way</span><a href="{{url('user/detail')}}" class="text-decoration-none mx-3">View Details</a>
                                    </a>
                                </td>
                              </tr>

                              <tr>
                                <th scope="row">3</th>
                                <td>2024-12-12</td>
                                <td>Rs 50000.00(2 Products)</td>
                                <td>
                                    <a href=""><span class="badge text-bg-success ">Delivered</span><a href="{{url('user/detail')}}" class="text-decoration-none mx-3">View Details</a>
                                    </a>
                                </td>
                              </tr>

                              <tr>
                                <th scope="row">4</th>
                                <td>2024-12-12</td>
                                <td>Rs 50000.00(2 Products)</td>
                                <td>
                                    <a href=""><span class="badge text-bg-success ">Delivered</span><a href="{{url('user/detail')}}" class="text-decoration-none mx-3">View Details</a>
                                    </a>
                                </td>
                              </tr>

                              <tr>
                                <th scope="row">5</th>
                                <td>2024-12-12</td>
                                <td>Rs 50000.00(2 Products)</td>
                                <td>
                                    <a href=""><span class="badge text-bg-success ">Delivered</span><a href="{{url('user/detail')}}" class="text-decoration-none mx-3">View Details</a>
                                    </a>
                                </td>
                              </tr>

                              <tr>
                                <th scope="row">6</th>
                                <td>2024-12-12</td>
                                <td>Rs 50000.00(2 Products)</td>
                                <td>
                                    <a href=""><span class="badge text-bg-success ">Delivered</span><a href="{{url('user/detail')}}" class="text-decoration-none mx-3">View Details</a>
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