@extends('auth.layout')
@section('content')



        <!--============= Sign In Section Starts Here =============-->
        <div class="account-wrapper">
            <div class="account-body">
                <h4 class="title mb-20">Welcome To {{env('APP_NAME')}}</h4>
                <span class="d-block mb-30 mt-2">Sign in with your work email</span>
                @if(Session::get('reg'))
                <div class="alert alert-success">
                    {{Session::get('reg')}}
                </div>
                @endif
                @if(Session::get('infoEmail'))
                <div class="alert alert-danger">
                    {{Session::get('infoEmail')}}
                </div>
                @endif
                @if(Session::get('info'))
                <div class="alert alert-danger">
                    {{Session::get('info')}}
                </div>
                @endif
                @if(Session::get('unverified'))
                <div class="alert alert-danger">
                    {{Session::get('unverified')}}
                </div>
                @endif
                @if(Session::get('out'))
                <div class="alert alert-success">
                    {{Session::get('out')}}
                </div>
                @endif
                @if(Session::get('status'))
                <div class="alert alert-success">
                    {{Session::get('status')}}
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
                        <span class="sign-in-recovery">Forgot your password? <a href="{{route('password.request')}}">recover password</a></span>
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