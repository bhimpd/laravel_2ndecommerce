@extends('admin.includes.main')
@push('title')
<title>Dashboard-Profile</title>
    
@endpush

@section('content')
       
    <div id="layoutSidenav_content">
        <main>
            <div class="container my-5">
                <div class="card p-3 border border-primary my-2">
                    <div class="row">
                        <div class="col-xl-8 col-md-8">
                          
                            <h4>Basic Information</h4>
                            <div class="row">

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Identification Number</label>
                                    <input type="text" class="form-control" id="Identification" placeholder="PAN number/Citizenship ">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Business Name</label>
                                    <input type="text" class="form-control" id="businessname" placeholder="Business Name">
                                </div>
    
                                <div class="col-lg-6 mb-3">
                                    <label  class="form-label">User Name</label>
                                    <input type="text" class="form-control" placeholder="User Name">
                                </div>
    
                                <div class="col-lg-12 mb-3">
                                    <label  class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
    
                                <div class="col-lg-12 mb-3">
                                    <label  class="form-label">PhoneNumber</label>
                                    <input type="tel" class="form-control" placeholder="+977-">
                                </div>
    
                            </div>                         
                           
                        </div> 
    
                        <div class="col-xl-4 col-md-4 my-5">
                           <div class="text-center my-3">
                                <img class="img-fluid" src="{{asset('assets/images/user/user.png')}}" alt="" style="width:155px">
                                <div class="mt-3">
                                    <label class="form-label btn btn-primary">Choose Image</label>
                                    <input type="file" class="form-control d-none" id="image">
                                </div>
                            </div>
                        </div>                      
                                            
    
                    </div>
                </div>
                
                <div class="card p-3 border border-primary my-2">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                          
                            <h4>Business Information</h4>
                            <div class="row mt-3">
                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Business Type</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select BusinessType</option>
                                        <option value="1">Solo Business</option>
                                        <option value="2">PartnerShip</option>
                                        <option value="3">Coorporation</option>
                                    </select>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label  class="form-label">GST Number</label>
                                    <input type="text" class="form-control" placeholder="ABCXYZ123789">
                                </div>
    
                                <div class="col-lg-6 mb-3">
                                    <label  class="form-label">Business Category</label>
                                    <input type="text" class="form-control" placeholder="Business Category">
                                </div>
    
                               
                            </div>                         
                           
                        </div> 
                    </div>
                </div>


                <div class="card p-3 border border-primary my-2">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                          
                            <h4>Payment Information</h4>
                            <div class="row mt-3">

                                <div class="col-lg-6 mb-3">
                                    <label  class="form-label">Bank Account Number</label>
                                    <input type="text" class="form-control" placeholder="XXXXXXXXXXXXXXX">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Prefer Payement Method</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select Payment Method</option>
                                        <option value="1">Paypal</option>
                                        <option value="2">E-Sewa</option>
                                        <option value="3">Card</option>
                                    </select>
                                </div>

                                
    
                                <div class="col-lg-6 mb-3">
                                    <label  class="form-label">Business Category</label>
                                    <input type="text" class="form-control" placeholder="Business Category">
                                </div>
    
                               
                            </div>                         
                           
                        </div> 
                    </div>
                </div>

                <div class="col-lg-3">
                    <button type="submit" class="btn btn-sm btn-primary">Save Change</button>
                </div>
            </div>
        </main>
        
@endsection