@extends('admin.includes.main')
@push('title')
<title>Admin - View Category</title>
    
@endpush

@section('content')
      
<div id="layoutSidenav_content">
    <main>
        <div class="container my-5">
            <div class="row my-5">
                <div class="col-xl-12 col-md-12">
                    <div class="d-flex">
                        <h4> View Categories</h4>
                        
                    </div>
                    <div>
                        <table id="datatablesSimple">
                            <thead>
                              <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>
                                    <div class="d-flex">
                                       
                                       <div>
                                            <h6 class="p-3">Category 1</h6>
                                       </div>
                                       
                                    </div>
                                </td>
                              
                                <td>
                                    <a href="{{url('admin/editcategory')}}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>

                                </td>
                              </tr>
        
                              <tr>
                                <td>2</td>
                                <td>
                                    <div class="d-flex">
                                       
                                       <div>
                                            <h6 class="p-3">Category 2</h6>
                                       </div>
                                       
                                    </div>
                                </td>
                              
                                <td>
                                    <a href="{{url('admin/editcategory')}}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>

                                </td>
                              </tr>
        
                              <tr>
                                <td>3</td>
                                <td>
                                    <div class="d-flex">
                                       
                                       <div>
                                            <h6 class="p-3">Category 3</h6>
                                       </div>
                                       
                                    </div>
                                </td>
                              
                                <td>
                                    <a href="{{url('admin/editcategory')}}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
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