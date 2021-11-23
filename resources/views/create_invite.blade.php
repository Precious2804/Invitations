<?php
$page = 'Create Invitations'
?>

@extends('layout')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center mt--85">

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h6 style="text-align: center;">Complete the outlook of your Invite, save and share</h6>
                </div>
                <div class="card-body">
                    <main>
                        <section class="section-flexed">
                            <div class="row">
                                <div class="col-lg-8">
                                    <!-- contenteditable="true" -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="bg-result">
                                                @include('partials.toolbar')
                                                @if($invite_details['event_name'] == "wedding")
                                                @include('partials.wedding')
                                                @elseif($invite_details['event_name'] == "birthday" || $invite_details['event_name'] == "graduation")
                                                @include('partials.birth_grad')
                                                @elseif($invite_details['event_name'] == "funeral")
                                                @include('partials.funeral')
                                                @elseif($invite_details['event_name'] == "seminar" || $invite_details['event_name'] == "conference")
                                                @include('partials.sem_conf')
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