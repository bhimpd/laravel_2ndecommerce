@extends('vendor.includes.main')
@push('title')
<title>Dashboard-Add Product</title>
    
@endpush

@section('content')
      
<div id="layoutSidenav_content">
    <main>
            <div class="container my-5">
                <div class="card p-3 border border-primary my-2">
                    <div class="row">
                        <div class="col-xl-8 col-md-8">
                          
                            <h4>Add Product</h4>
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="firstname" placeholder="Product Name">
                                </div>
    
                                <div class="col-lg-12 mb-3">
                                    <label  class="form-label">Product Price</label>
                                    <input type="text" class="form-control" placeholder="Product Price">
                                </div>
    
                                <div class="col-lg-12 mb-3">
                                    <label  class="form-label">Category</label>
                                    <select class="form-select" aria-label="Default Category">
                                        <option selected>Select Category</option>
                                        <option value="1">Eectronics</option>
                                        <option value="2">Appliances</option>
                                        <option value="3">Category_3</option>
                                      </select>
                                </div>
    
                                <div class="col-lg-12 mb-3">
                                    <label  class="form-label">Stock Quantity</label>
                                    <input type="text" class="form-control" placeholder="12">
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label for="floatingTextarea">Product Description</label>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Product Description" id="floatingTextarea"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <button type="submit" class="btn btn-sm btn-primary">Add Product</button>
                                </div>
                            </div>                         
                           
                        </div> 
    
                        <div class="col-xl-4 col-md-4 my-5">
                           <div class="text-center my-3">
                                <img class="img-fluid" src="{{asset('assets/images/products/shoe8.png')}}" alt="" style="width:155px">
                                <div class="mt-3">
                                    <label class="form-label btn btn-primary">Choose Product</label>
                                    <input type="file" class="form-control d-none" id="image">
                                </div>
                            </div>
                        </div>                      
                                            
    
                    </div>
                </div>
            </div>
        </main>


@endsection