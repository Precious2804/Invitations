<?php
$page = 'Profile Settings'
?>

@extends('layout')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center mt--85">

    </div>
    <div class="row mb-30">
        <div class="col-lg-6 mb-30">
            <div class="create_wrapper mw-100">
                @if(Session::get('updated'))
                <div class="alert alert-success">
                    {{Session::get('updated')}}
                </div>
                @endif
                <h5 class="subtitle">Edit Personal Info</h5>

                <form class="create_ticket_form row mb-30-none" method="POST" action="{{route('update_profile')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex align-items-center mb-30">
                        <div class="update_user">
                            @if($loggedUserInfo['picture'] == NULL)
                            <img src="{{URL::asset('assets/images/dashboard/user.png')}}" alt="dashboard">
                            @else
                            <img src="{{$loggedUserInfo['picture']}}" alt="Profile picture">
                            @endif
                        </div>
                        <div class="pl-3">
                            <!-- <span class="sub_subtitle cl-title fz-sm d-block">Select profile Picture</span> -->
                            <label for="update_profile" class="custom-button m-0 mt-2 lh-40 h-40">Browse Image</label>
                            <input type="file" id="update_profile" class="profile_update_input" name="picture" value="{{$loggedUserInfo['picture']}}">
                        </div>
                    </div>
                    <div class="create_form_group col-sm-12">
                        <label for="account_name">Username:</label>
                        <input type="text" id="account_name" placeholder="Enter Username" name="username" value="{{$loggedUserInfo['username']}}">
                    </div>
                    <div class="create_form_group col-sm-12">
                        <label for="full_name">Full Name:</label>
                        <input type="text" id="full_name" placeholder="Enter your Full Name" name="fullname" value="{{$loggedUserInfo['fullname']}}">
                    </div>
                    <div class="create_form_group col-sm-12">
                        <label for="account_email">Your Email Address:</label>
                        <input type="email" id="account_email" placeholder="Enter your Email" name="email" value="{{$loggedUserInfo['email']}}">
                    </div>
                    <div class="create_form_group col-sm-12">
                        <label for="account_mobile">Mobile No:</label>
                        <input type="tel" id="account_mobile" placeholder="Enter your Mobile No" name="phone" value="{{$loggedUserInfo['phone']}}">
                    </div>
                    <div class="create_form_group col-sm-6 align-self-end">
                        <button type="submit" class="custom-button border-0">Save</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-lg-6 mb-30">
            <div class="create_wrapper mw-100">
                @if(Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
                <h5 class="subtitle">Change Passowrd</h5>
                <form class="create_ticket_form row mb-30-none" method="POST" action="{{route('change_password')}}">
                    @csrf
                    <div class="create_form_group col-sm-12">
                        <label for="old_pass">Current Passowrd:</label>
                        <input type="password" id="old_pass" name="current_password" placeholder="Enter your Current Password">
                        <span class="text-danger"> @error('current_password') {{$message}} @enderror </span>
                    </div>
                    <div class="create_form_group col-sm-12">
                        <label for="new_pass">New password::</label>
                        <input type="password" id="new_pass" name="password" placeholder="Enter your new password:">
                        <span class="text-danger"> @error('password') {{$message}} @enderror </span>
                    </div>
                    <div class="create_form_group col-sm-12">
                        <label for="repeat_pass">Repeat the new password::</label>
                        <input type="password" id="repeat_pass" name="password_confirmation" placeholder="Repeat your new password:">
                    </div>
                    <div class="create_form_group col-sm-6 align-self-end">
                        <button type="submit" class="custom-button border-0">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@stop