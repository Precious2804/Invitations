@extends('auth.layout')
@section('content')


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