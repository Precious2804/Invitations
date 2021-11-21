<?php
$page = 'Start Creating Invitation'
?>

@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mt--85">

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header" style="text-align: center;">
                    <h5 class="subtitle">Fill the Following Form to Create an Invitation for "{{$event}}"</h5>
                </div>
                <div class="card-body">
                    <form class="create_ticket_form mb-30-none" method="POST" action="{{route('create_now')}}">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="event_name" value="{{$name}}">
                            <!-- Input for the Names of the celebrants/departed/programme title starts -->
                            @if($name == "wedding")
                            <div class="form-group col-lg-6">
                                <label for="old_pass">Bride's Family:</label>
                                <input type="text" name="bride_fam" placeholder="The name of Bride's family Here">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="old_pass">Groom's Family:</label>
                                <input type="text" name="groom_fam" placeholder="The Name of Groom's family Here">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="old_pass">Bride's Name:</label>
                                <input type="text" name="bride" placeholder="Enter Bride's name">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="old_pass">Groom's Name:</label>
                                <input type="text" name="groom" placeholder="Enter Groom's name">
                            </div>
                            @elseif($name == "funeral")
                            <div class="form-group col-lg-6">
                                <label for="old_pass">Name of the Departed:</label>
                                <input type="text" name="departed" placeholder="Enter name of the Departed">
                            </div>
                            @elseif($name == "seminar" or $name == "conference")
                            <div class="form-group col-lg-6">
                                <label for="old_pass">Programme Title:</label>
                                <input type="text" name="title" placeholder="What is the Title of the Programme?">
                            </div>
                            @else
                            <div class="form-group col-lg-6">
                                <label for="old_pass">Celebrant's Name:</label>
                                <input type="text" name="celebrant" placeholder="Enter Celebrant's name">
                            </div>
                            @endif
                            <!-- Input for the Names of the celebrants/departed/programme title starts -->

                            <!-- Input for the Event Type Starts -->
                            <div class="form-group col-lg-6">
                                <label for="old_pass">Event:</label>
                                <input type="hidden" name="event" value="{{$event}}">
                                <input type="text" name="event" value="{{$event}}" disabled>
                            </div>
                            <!-- Input for the Event Type Ends -->

                            <div class="form-group col-lg-3">
                                <label for="">Date</label>
                                <input type="text" name="date" id="" placeholder="Enter date">
                                <span class="text-muted">Hint:(Saturday, 28th April 2021)</span>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="">Time</label>
                                <input type="text" name="time" id="" placeholder="Enter time">
                                <span class="text-muted">Hint:(6pm)</span>
                            </div>

                            <!-- Input for the venue starts -->
                            <div class="form-group col-lg-6">
                                <label for="old_pass">Venue:</label>
                                <input type="text" name="venue" placeholder="Input the Venue">
                            </div>
                            @if($name == "wedding")
                            <div class="form-group col-lg-6">
                                <label for="old_pass">Reception Venue:</label>
                                <input type="text" name="reception" placeholder="Input the Venue for the Reception">
                                <span class="text-muted">Hint: (Reception follows immediately at: ......)</span>
                            </div>
                            @endif
                            <!-- Input for the venue ends -->

                            <!-- Input for address starts here -->
                            @if($name != "funeral")
                            <div class="form-group col-lg-6">
                                <label for="old_pass">Address:</label>
                                <input type="text" name="address" placeholder="Input the Address">
                            </div>
                            @endif

                            @if($name == "funeral")
                            <div class="form-group col-lg-6">
                                <label for="old_pass">Duration Lived:</label>
                                <input type="text" name="duration" placeholder="e.g. 1921 - 2099">
                            </div>
                            @endif

                            @if($name == "wedding" || $name == "funeral")
                            <div class="form-group col-lg-6">
                                <label for="old_pass">Reception Address:</label>
                                <input type="text" name="reception_address" placeholder="Address for the Reception">
                            </div>
                            <!-- Input for address ends here -->
                            <!-- Input for Colors of the day starts -->
                            <div class="form-group col-lg-6">
                                <label for="old_pass">Color(s) of the Day:</label>
                                <input type="text" name="color" placeholder="Colors of the Day">
                            </div>
                            <!-- Input for Colors of the day ends -->

                            <!-- Input for Toast starts here -->
                            <div class="form-group col-lg-6">
                                <label for="old_pass">Toast</label>
                                <textarea name="toast" id="" placeholder="Write a Toast Here"></textarea>
                            </div>
                            <!-- Input for Toast ends here -->
                            @endif

                            <!-- Input for RSVP starts here -->
                            <div class="form-group col-lg-6">
                                <label for="old_pass">RSVP(s):</label>
                                <input type="text" name="rsvp" placeholder="Write RSVP Numbers Here">
                                <span class="text-muted">Hint: Seperate the numbers with a comma (,)</span>
                            </div>
                            <!-- Input for RSVP ends here -->
                        </div>
                        <div class="col-lg-6 float-right">
                            <button type="submit" class="btn btn-primary">Click to Proceed</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@stop