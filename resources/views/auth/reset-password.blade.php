@extends('auth.layout')
@section('content')

<!--============= Sign In Section Starts Here =============-->
<div class="account-wrapper">
    <div class="account-body">
        <h4 class="title mb-20">Update your Password now</h4>
        @if(Session::get('status'))
        <div class="alert alert-success">
            {{Session::get('status')}}
        </div>
        @endif
        @if(Session::get('email'))
        <div class="alert alert-danger">
            {{Session::get('email')}}
        </div>
        @endif
        @if(Session::get('invalid'))
        <div class="alert alert-danger">
            {{Session::get('invalid')}}
        </div>
        @endif
        <form class="account-form" method="POST" action="{{route('password.update')}}">
            @csrf
            <input type="hidden" name="token" value="{{$token}}">
            <div class="form-group">
                <label for="sign-up">Your Email </label>
                <input type="hidden" placeholder="Enter Your Email " id="sign-up" name="email" value="{{$email}}">
                <input type="email" placeholder="Enter Your Email " id="sign-up" name="email" value="{{$email}}" disabled>
                <span class="text-danger"> @error('email') {{$message}} @enderror </span>
            </div>
            <div class="form-group">
                <label for="pass">New Password</label>
                <input type="password" placeholder="Enter Your Password" id="pass" name="password">
                <span class="text-danger"> @error('password') {{$message}} @enderror </span>
            </div>
            <div class="form-group">
                <label for="sign-up">Confirm new Password </label>
                <input type="password" name="password_confirmation" placeholder="Confirm your Password ">
                <span class="text-danger"> @error('password_confirmation') {{$message}} @enderror </span>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="mt-2 mb-2">Update Password Now</button>
            </div>
        </form>
    </div>
    <div class="account-header pb-0">
        <span class="d-block mt-15">Don't have an account? <a href="{{route('register')}}">Sign Up Here</a></span>
    </div>
</div>
</div>
</div>
<!--============= Sign In Section Ends Here =============-->
@stop