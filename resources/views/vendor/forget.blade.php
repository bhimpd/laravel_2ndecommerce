@extends('vendor.layouts.main')
@push('title')
    <title>Forget Password</title>
@endpush
@section('content')


{{-- user forget started --}}
<section>
    <div class="container position-absolute start-50 top-50 translate-middle">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <img src="{{ asset('assets/images/user/user.png') }}" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <form action="">
                                <div class="row">
                                   
    
                                    <div class="col-lg-12 mb-3">
                                        <label for="phonenumber" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control form-control-lg" placeholder="+977-">
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <label for="password" class="form-label">New Password</label>
                                        <input type="password" class="form-control form-control-lg" placeholder="Password">
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <label for="password" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control form-control-lg" placeholder="Password">
                                    </div>
                                </div>
                                  
                                <a href="{{url('/vendor/login')}}" type="submit" class="btn btn-primary text-light form-control form-control-lg">Change Password</a>
                                
                                <div class="text-center my-4">Have an account? <a href="{{url('vendor/login')}}" class="text-decoration-none">Login Up</a></div>
                               
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

{{-- user login ended --}}

@endsection
