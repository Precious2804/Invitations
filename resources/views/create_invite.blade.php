<?php
$page = 'Create Invitations'
?>

@extends('layout')
@section('content')

<!-- Inner CSS -->
<style>
    .image-container{
        position: relative;
        text-align: center
    }
    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>

<div class="container-fluid">
    <div class="row justify-content-center mt--85">

    </div>
    <div class="row mb-30">
        <div class="col-lg-7 mb-30">
            <div class="create_wrapper mw-100" style="align-items: center;">
                <div class="image-container">
                    <img src="{{URL::asset($select_temp['image'])}}" alt="{{env('APP_NAME')}}" width="100%">
                    <!-- Card Contents goes Here -->
                    <div class="centered">
                        <span>Card Contents goes Here</span>
                        <span>Card Contents goes Here</span>
                        <span>Card Contents goes Here</span>
                        <span>Card Contents goes Here</span>
                        <span>Card Contents goes Here</span>
                        <span>Card Contents goes Here</span>
                        <span>Card Contents goes Here</span>
                        <span>Card Contents goes Here</span>
                        <span>Card Contents goes Here</span>
                        <span>Card Contents goes Here</span>
                        <span>Card Contents goes Here</span>
                        <span>Card Contents goes Here</span>
                    </div>
                    <!-- Card Contents Ends Here -->
                </div>
            </div>
        </div>

        <div class="col-lg-5 mb-30">
            <div class="create_wrapper mw-100">

            </div>
        </div>
    </div>
</div>

@stop