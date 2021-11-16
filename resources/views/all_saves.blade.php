<?php
$page = 'Saved Invitations'
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
                    <h6 style="text-align: center;">All Saved Invitations</h6>
                </div>
                <div class="card-body">
                    @if(Session::get('deleted'))
                    <div class="alert alert-success">
                        {{Session::get('deleted')}}
                    </div>
                    @endif
                    <div class="row mb-30">
                        @foreach($all_invites as $item)
                        <div class="col-lg-4 mb-30">
                            <div class="create_wrapper mw-100" style="text-align: center; text-transform: capitalize; font-weight:bold">
                                @if($item->event_name == "wedding")
                                <span>{{$item->bride}} & {{$item->groom}}</span>
                                @elseif($item->event_name == "birthday" || $item->event_name == "graduation")
                                <span>{{$item->celebrant}}</span>
                                @elseif($item->event_name == "funeral")
                                <span>{{$item->departed}}</span>
                                @else
                                <span>{{$item->title}}</span>
                                @endif
                                <br>
                                <span style="text-transform: uppercase; font-size:18px">{{$item->event}}</span> <br>
                                <a href="/preview_invite/{{$item->invite_id}}">
                                    <button class="btn btn-info btn-sm" style="margin-bottom: 12px; margin-left:8px; height:50%">Preview</button>
                                </a>
                                <a href="/edit_invite/{{$item->invite_id}}">
                                    <button class="btn btn-primary btn-sm" style="margin-bottom: 12px; margin-left:8px; height:50%">Edit Invite</button>
                                </a>
                                <a href="/delete_invite/{{$item->invite_id}}">
                                    <button class="btn btn-danger btn-sm" style="margin-bottom: 12px; margin-left:8px; height:50%">Delete</button>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop