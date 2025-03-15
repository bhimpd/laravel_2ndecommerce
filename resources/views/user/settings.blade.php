@extends('user.layouts.main')
@push('title')
<title>Settings</title>
    
@endpush

@section('content')
       
    <div id="layoutSidenav_content">
        <main>
            <div class="container my-5">
                <div class="card p-3 border border-primary my-2">
                    <div class="row">
                        <div class="col-xl-8 col-md-8">
                          
                            <h4>Account Settings</h4>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstname" placeholder="First Name">
                                </div>
    
                                <div class="col-lg-6 mb-3">
                                    <label  class="form-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
    
                                <div class="col-lg-12 mb-3">
                                    <label  class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
    
                                <div class="col-lg-12 mb-3">
                                    <label  class="form-label">PhoneNumber</label>
                                    <input type="tel" class="form-control" placeholder="+977-">
                                </div>
    
                                <div class="col-lg-3">
                                    <button type="submit" class="btn btn-sm btn-primary">Save Change</button>
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
                          
                            <h4>Billing Address</h4>
                            <div class="row mt-3">
                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Country</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select Country</option>
                                        <option value="1">Nepal</option>
                                        <option value="2">India</option>
                                        <option value="3">USA</option>
                                    </select>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label  class="form-label">First Name</label>
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
    
                                <div class="col-lg-6 mb-3">
                                    <label  class="form-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
    
                                <div class="col-lg-6 mb-3">
                                    <label  class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
    
                                <div class="col-lg-6 mb-3">
                                    <label  class="form-label">PhoneNumber</label>
                                    <input type="tel" class="form-control" placeholder="+977-">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label  class="form-label">Pin Code</label>
                                    <input type="text" class="form-control" placeholder="1234">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label  class="form-label">Land Mark</label>
                                    <input type="text" class="form-control" placeholder="Victor Street">
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">City</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select City</option>
                                        <option value="1">Kathmandu</option>
                                        <option value="2">Pokhara</option>
                                        <option value="3">Biratnagar</option>
                                    </select>
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">State</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select State</option>
                                        <option value="1">State 1</option>
                                        <option value="2">State 2</option>
                                        <option value="3">State 3</option>
                                    </select>
                                </div>

    
                                <div class="col-lg-3">
                                    <button type="submit" class="btn btn-sm btn-primary">Save Change</button>
                                </div>
                            </div>                         
                           
                        </div> 
                    </div>
                </div>
            </div>
        </main>

@endsection