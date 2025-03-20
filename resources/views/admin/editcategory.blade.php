@extends('admin.includes.main')
@push('title')
<title>Admin-Edit Category</title>
    
@endpush

@section('content')
      
<div id="layoutSidenav_content">
  
    <main>
        <div class="container my-5">
            <div class="card p-3 border border-primary my-2">
                <div class="row">
                    <div class="col-xl-8 col-md-8">
                        
                        <h4>Edit Category</h4>
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Category Name</label>
                                <input type="text" class="form-control" id="firstname" placeholder="Category Name">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Add Commision</label>
                                <input type="text" class="form-control" id="firstname" placeholder="20%">
                            </div>
                            

                            <div class="col-lg-3">
                                <button type="submit" class="btn btn-sm btn-primary">Save Category</button>
                            </div>
                        </div>                         
                        
                    </div> 

                                    
                                        

                </div>
            </div>
        </div>
    </main>
@endsection