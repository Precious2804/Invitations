<?php
$page = 'Choose event Type'
?>

@extends('layout')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center mt--85">

    </div>
    <div class="row mb-30">
        @foreach($all_events as $item)
        <div class="col-lg-4 mb-30">
            <div class="create_wrapper mw-100">
                <a href="/start_creating/{{$item->no_of_celebrant}}?event={{$item->event_name}}&id={{$item->name}}">
                    <span style="text-transform: uppercase;">{{$item->event_name}}</span>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@stop