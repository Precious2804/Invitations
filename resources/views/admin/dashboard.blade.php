@extends('auth.layout')
@section('content')

<!--============= Sign In Section Starts Here =============-->
<div class="account-wrapper">
    <div class="account-body">
        <h4 class="title mb-20">Upload a new Template</h4>
        @if(Session::get('done'))
        <div class="alert-success">
            {{Session::get('done')}}
        </div>
        @endif
        <form class="account-form" method="POST" action="{{route('save_now')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="sign-up">Image name </label>
                <input type="text" placeholder="Image name here " id="sign-up" name="name">
                <span class="text-danger"> @error('name') {{$message}} @enderror </span>
            </div>
            <div class="form-group">
                <label for="">Image File </label>
                <input type="file" name="image" class="form-control">
                <span class="text-danger"> @error('image') {{$message}} @enderror </span>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="mt-2 mb-2">Upload Template</button>
            </div>
        </form>
    </div>
    <div class="or">
        <span>OR</span>
    </div>
    <div class="account-header pb-0">
        <span class="d-block mt-15"><a href="{{route('logout')}}">Logout</a></span>
    </div>
</div>
</div>
</div>
<!--============= Sign In Section Ends Here =============-->
@stop