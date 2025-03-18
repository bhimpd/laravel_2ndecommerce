@extends('vendor.layouts.main')
@push('title')
    <title>Vendor Register</title>
@endpush
@section('content')


{{-- user register started --}}
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
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control form-control-lg" placeholder="Password">
                                    </div>
                                </div>
                                  
                                <a href="{{url('/vendor/login')}}" type="submit" class="btn btn-primary text-light form-control form-control-lg">Login In</a>
                                
                                <div class="text-center my-4">Don't Have an account? <a href="{{url('vendor/signup')}}" class="text-decoration-none">Sign Up</a></div>

                                <div class="text-center my-4"> <a href="{{url('vendor/forget')}}" class="text-decoration-none">Forgotten Password ? </a></div>
                               
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

{{-- user register ended --}}

@endsection
