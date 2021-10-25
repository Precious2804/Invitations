<?php
$page = 'Select a Design'
?>

@extends('layout')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center mt--85">

    </div>
    <div class="row mb-30">
        @foreach($templates as $item)
        <div class="col-lg-4 mb-30">
            <div class="create_wrapper mw-100">
                <a href="/create_invite/{{$item->temp_id}}">
                    <span>{{$item->name}}</span>
                    <img src='{{URL::asset("$item->image")}}' alt="" width="100%" height="400px">
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@stop