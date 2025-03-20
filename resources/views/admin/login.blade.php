@extends('admin.layouts.main')
@push('title')
    <title>Admin Login</title>
@endpush
@section('content')


{{-- user login started --}}
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
                                        <label for="username" class="form-label">UserName</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="User Name">
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control form-control-lg" placeholder="Password">
                                    </div>
                                </div>
                                  
                                <a href="{{url('/admin/login')}}" type="submit" class="btn btn-primary text-light form-control form-control-lg">Login In</a>

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
