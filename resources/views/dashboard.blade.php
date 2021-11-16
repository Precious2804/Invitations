<?php
    $page = 'Dashboard';
?>
@extends('layout')
@section('content')


<div class="container-fluid">
    <div class="row justify-content-center mt--85">

    </div>
    <div class="row pb-30">
        <div class="col-lg-6">
            <div class="total-earning-item">
                <div class="total-earning-heading">
                    <h5 class="title">Explore Invitations</h5>
                </div>
                <div class="d-flex flex-wrap justify-content-between">


                </div>
                <div class="text-center">
                    <a href="{{route('choose_event')}}" class="normal-button">Explore <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="total-earning-item">
                <div class="total-earning-heading">
                    <h5 class="title">Saved Invitations </h5>
                </div>
                <div class="d-flex flex-wrap justify-content-between">


                </div>
                <div class="text-center">
                    <a href="{{route('all_saves')}}" class="normal-button">Explore <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

    </div>
</div>
@stop