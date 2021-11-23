<?php
$page = 'Preview Invitations'
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
                                                <a href="/edit_invite/{{$invite_details['invite_id']}}">
                                                    <button class="btn btn-primary btn-sm" style="margin-bottom: 12px; margin-left:8px; height:50%">Edit Invite</button>
                                                </a>
                                                <button class="btn btn-success btn-sm" style="margin-bottom: 12px; margin-left:8px; width:25%; height:50%" data-toggle="modal" data-target="#exampleModal2">Share</button>
                                                <button class="btn btn-danger btn-sm" style="margin-bottom: 12px; margin-left:8px; width:25%; height:50%" data-toggle="modal" data-target="#exampleModal">Delete</button>


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
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Share this Invitation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width: 25%;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="">
                    Invitation Link Here
                </label>
                <div class="form-group">
                    <input type="text" id="box" class="form-control" value="{{route('invitation_detail')}}?invite={{$invite_details['invite_id']}}" style="border-color: green;" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="button" class="btn btn-primary" style="width: 25%;">Copy Link</button>
                <a href="/invitation_detail?invite={{$invite_details['invite_id']}}" target="_blank">
                    <button type="button" class="btn btn-secondary">View</button>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete this Invitation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width: 25%;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you Sure you want to delete this Invitation? <br>
                If yes, Click "Delete", if No, click "Cancel"
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal" style="width: 25%;">Cancel</button>
                <a href="/delete_invite/{{$invite_details['invite_id']}}">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    let box = document.getElementById("box");
    let button = document.getElementById("button");
    button.onclick = function() {
        box.select();
        document.execCommand("copy");
        button.innerText = "Copied!"
        button.style.background = "#F7B902"
    }
</script>

@stop