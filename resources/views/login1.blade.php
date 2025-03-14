@extends('layouts.main')
@push('title')
    <title>Login 1</title>
@endpush
@section('content')

<div class="container-fluid bg-light p-4">
    <h1 class="text-center"><i class="fa-solid fa-user mx-2"></i>Login 1</h1>
</div>


{{-- user register started --}}
<section>
    <div class="container my-4">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <img src="{{ asset('assets/images/products/shoe4.png') }}" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <form action="">
                                
                                <div class="mb-3">
                                    <div class="form-text mb-2">Please enter your OTP</div>
                                    <input type="password" class="form-control form-control-lg" placeholder="******">
                                </div>
                                
                                <button type="submit" class="btn theme-orange-btn text-light form-control form-control-lg">Login</button>
                                
                                <div class="text-center my-4">Don't Have an account? <a href="{{url('/register')}}" class="text-decoration-none">Sign Up</a></div>
                               
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