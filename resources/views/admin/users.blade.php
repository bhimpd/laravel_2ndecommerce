@extends('admin.includes.main')
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
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>                                    <th scope="col">Address</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
    
                                <tbody>
                                  <tr>
                                    <td scope="row">1</td>
                                    <td>Victor Memo</td>
                                    <td>9814412312</td>
                                    <td>victor.memo@gmail.com</td>
                                    <td>Pokhara</td>
                                    <td><span class="badge text-bg-success">Active</span>
                                    </td>
                                    <td>Unlocked</td>
                                    <td>
                                        <a href="#" class="btn btn-sm badge text-bg-success"><i class="fa-solid fa-shield"></i></a>    
                                        <a href="#" class="btn btn-sm badge text-bg-danger"><i class="fa-solid fa-ban"></i></a>    

                                    </td>
                                  </tr>

                                  <tr>
                                    <td scope="row">1</td>
                                    <td>Victor Memo</td>
                                    <td>9814412312</td>
                                    <td>victor.memo@gmail.com</td>
                                    <td>Pokhara</td>
                                    <td><span class="badge text-bg-danger">Blocked</span>
                                    </td>
                                    <td>Unlocked</td>
                                    <td>
                                        <a href="#" class="btn btn-sm badge text-bg-success"><i class="fa-solid fa-shield"></i></a>    
                                        <a href="#" class="btn btn-sm badge text-bg-danger"><i class="fa-solid fa-ban"></i></a>    

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