<?php
$page = 'Invitation Card Details'
?>

@extends('layout')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center mt--85">

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <main>
                        <section class="section-flexed">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <!-- contenteditable="true" -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="bg-result">

                                                @if($invite_details['event_name'] == "wedding")
                                                @include('previews.wedding')
                                                @elseif($invite_details['event_name'] == "birthday" || $invite_details['event_name'] == "graduation")
                                                @include('previews.birth_grad')
                                                @elseif($invite_details['event_name'] == "funeral")
                                                @include('previews.funeral')
                                                @elseif($invite_details['event_name'] == "seminar" || $invite_details['event_name'] == "conference")
                                                @include('previews.sem_conf')
                                                @endif

                                            </div>
                        </section>
                    </main>

                </div>
            </div>
        </div>
    </div>
</div>

@stop