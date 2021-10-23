@extends('auth.layout')
@section('content')

<div class="account-section bg_img" data-background="{{URL::asset('assets/images/account-bg.jpg')}}">
    <div class="container">
        <div class="account-title text-center">
            <a href="{{route('/')}}" class="back-home"><i class="fas fa-angle-left"></i><span>Back <span class="d-none d-sm-inline-block">To Home</span></span></a>
            <a href="{{route('/')}}" class="logo">
                <img src="{{URL::asset('assets/images/logo/footer-logo.png')}}" alt="logo">
            </a>
        </div>

        <!--============= Sign In Section Starts Here =============-->
        <div class="account-wrapper">
            <div class="account-body">
                <h4 class="title mb-20">Welcome To {{env('APP_NAME')}}</h4>
                <span class="d-block mb-30 mt-2">Sign in with your work email</span>
                @if(Session::get('infoEmail'))
                <div class="alert-danger">
                    {{Session::get('infoEmail')}}
                </div>
                @endif
                @if(Session::get('info'))
                <div class="alert-danger">
                    {{Session::get('info')}}
                </div>
                @endif
                <form class="account-form" method="POST" action="{{route('do-login')}}">
                    @csrf
                    <div class="form-group">
                        <label for="sign-up">Your Email </label>
                        <input type="text" placeholder="Enter Your Email " id="sign-up" name="email">
                        <span class="text-danger"> @error('email') {{$message}} @enderror </span>
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" placeholder="Enter Your Password" id="pass" name="password">
                        <span class="sign-in-recovery">Forgot your password? <a href="#0">recover password</a></span>
                        <span class="text-danger"> @error('password') {{$message}} @enderror </span>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="mt-2 mb-2">Sign In</button>
                    </div>
                </form>
            </div>
            <div class="or">
                <span>OR</span>
            </div>
            <div class="account-header pb-0">
                <a href="#0" class="sign-in-with"><img src="assets/images/icon/google.png" alt="icon"><span>Sign In with Google</span></a>
                <span class="d-block mt-15">Don't have an account? <a href="{{route('register')}}">Sign Up Here</a></span>
            </div>
        </div>
    </div>
</div>
<!--============= Sign In Section Ends Here =============-->
@stop