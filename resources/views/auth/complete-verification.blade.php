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
            <div class="account-header">
                <h4 class="title">Verification Completed</h4>
                <div class="alert alert-success">
                    Your Email Address has been successfully verified on {{env('APP_NAME')}}. <br> You can now proceed to Login into your account. <span><a href="{{route('login')}}">Login Here</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
@stop