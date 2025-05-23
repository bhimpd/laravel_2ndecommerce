@extends('layouts.main')
@push('title')
    <title>User Register</title>
@endpush
@section('content')

<div class="container-fluid bg-light p-4">
    <h1 class="text-center"><i class="fa-solid fa-user mx-2"></i>User Register</h1>
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
                                    <div class="form-text mb-2">Please enter your Phone Number</div>
                                    <input type="number" class="form-control form-control-lg" placeholder="+977">
                                </div>
                                
                                <a href="{{url('/register1')}}" type="submit" class="btn theme-orange-btn text-light form-control form-control-lg">Continue</a>
                                
                                <div class="text-center my-4">Have an account? <a href="{{url('/login')}}" class="text-decoration-none">Login</a></div>
                               
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