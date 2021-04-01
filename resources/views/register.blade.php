@extends('layouts.frontend_blade_master')

@section('content')

<div class="breadcumb-area bg-img-4 ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcumb-wrap text-center">
                    <h2>Account</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><span>Register</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .breadcumb-area end -->
<!-- checkout-area start -->
<div class="account-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                <div class="account-form form-style">
                    <form action="{{ url('add-user') }}" method="post">
                        @csrf


                            @if(session('msg'))
                                <p class="text-success">{{ session('msg') }}</p>
                            @endif

                        <p>User Name</p>
                        <input type="text" name="userName" class="d-block @error('userName') is-invalid @enderror">
                        <span class="text-danger">
                            @error('userName')                    
                                <div class="alert alert-danger my-2">{{ $message }}</div>
                            @endif  
                        </span>
                        <p>Email Address</p>
                        <input type="email" name="userEmail" class="d-block @error('userEmail') is-invalid @enderror">
                        <span class="text-danger">
                            @error('userEmail')                    
                                <div class="alert alert-danger my-2">{{ $message }}</div>
                            @endif  
                        </span>                        
                        <p>Password *</p>
                        <input type="password" name="userPassword" class="d-block @error('userPassword') is-invalid @enderror">
                        <span class="text-danger">
                            @error('userPassword')                    
                                <div class="alert alert-danger my-2">{{ $message }}</div>
                            @endif  
                        </span>                        
                        <p>Confirm Password *</p>
                        <input type="password" name="confirmPassword" class="d-block @error('confirmPassword') is-invalid @enderror">
                        <span class="text-danger">
                            @error('confirmPassword')                    
                                <div class="alert alert-danger my-2">{{ $message }}</div>
                            @endif  
                        </span>                        
                        <button type="submit" name="register">Register</button>
                        <div class="text-center">
                            <a href="login.html">Or Login</a>
                        </div>                        
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
