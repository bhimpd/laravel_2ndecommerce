@extends('vendor.includes.main')
@push('title')
<title>Dashboard-Users</title>
    
@endpush

@section('content')
      
<div id="layoutSidenav_content">
    <main>
            <div class="container">
                <div class="card p-3 border border-primary my-2">
                    <div class="row ">
                        <div class="col-xl-12 col-md-12">
                            <div class="d-flex">
                                <h4>Users</h4>
                               
                            </div>
                            <div>
                              <table id="datatablesSimple">
                                <thead>
                                  <tr>
                                    <th scope="col">S.N</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
    
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Victor Memo</td>
                                    <td>victor.memo@gmail.com</td>
                                    <td>Pokhara</td>
                                    <td>
                                        <a href="{{url('vendor/orderdetail')}}" class="btn btn-sm btn-info"><i class="fa-solid fa-eye"></i></a>    
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