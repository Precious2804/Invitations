@extends('auth.layout')
@section('content')


<!--============= Sign In Section Starts Here =============-->
<div class="account-wrapper">
    <div class="account-body">
        <h4 class="title mb-20">Request for Password request Link</h4>
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
        <form class="account-form" method="POST" action="{{route('password.email')}}">
            @csrf
            <div class="form-group">
                <label for="sign-up">Your Email </label>
                <input type="text" placeholder="Enter Your Email " id="sign-up" name="email">
                <span class="text-danger"> @error('email') {{$message}} @enderror </span>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="mt-2 mb-2">Request Password Link</button>
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