@extends('auth.layout')
@section('content')


<!--============= Sign In Section Starts Here =============-->
<div class="account-wrapper">
    <div class="account-header">
        <h4 class="title">Let's get started</h4>
        <a href="#0" class="sign-in-with"><img src="{{URL::asset('assets/images/icon/google.png')}}" alt="icon"><span>Sign In with Google</span></a>
    </div>
    <div class="or">
        <span>OR</span>
    </div>
    <div class="account-body">
        <span class="d-block mb-20">Sign up with your work email</span>
        @if(Session::get('verifyEmail'))
        <div class="alert alert-success">
            {{Session::get('verifyEmail')}}
        </div>
        @endif
        @if(Session::get('unable'))
        <div class="alert alert-success">
            {{Session::get('unable')}}
        </div>
        @endif
        <form class="account-form" method="POST" action="{{route('do-register')}}">
            @csrf
            <div class="form-group">
                <label for="sign-up">Your Email </label>
                <input type="email" name="email" placeholder="Enter Your Email " id="sign-up">
                <span class="text-danger"> @error('email') {{$message}} @enderror </span>
            </div>
            <div class="form-group">
                <label for="sign-up">Your Username </label>
                <input type="text" name="username" placeholder="Enter Your Username " id="sign-up">
                <span class="text-danger"> @error('username') {{$message}} @enderror </span>
            </div>
            <div class="form-group">
                <label for="sign-up">Choose Password </label>
                <input type="password" name="password" placeholder="Choose a password " id="sign-up">
                <span class="text-danger"> @error('password') {{$message}} @enderror </span>
            </div>
            <div class="form-group">
                <label for="sign-up">Confirm Password </label>
                <input type="password" name="password_confirmation" placeholder="Confirm your Password " id="sign-up">
                <span class="text-danger"> @error('password_confirmation') {{$message}} @enderror </span>
            </div>
            <div class="form-group text-center">
                <button type="submit">Register Now</button>
                <span class="d-block mt-15">Already have an account? <a href="{{route('login')}}">Sign In</a></span>
            </div>
        </form>
    </div>
</div>
</div>
</div>
<!--============= Sign In Section Ends Here =============-->

@stop