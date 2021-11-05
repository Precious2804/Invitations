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
                    <h5 class="subtitle">Fill the Following Form to Create an Invitation</h5>
                </div>
                <div class="card-body">
                    <form class="create_ticket_form mb-30-none" method="POST" action="">
                        @csrf
                        <div class="row">
                            <!-- Input for the Names of the celebrants/departed/programme title starts -->
                            @if($no_of_celebrant == 2)
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
                            @elseif($no_of_celebrant == 1 && $name == "funeral")
                            <div class="form-group col-lg-6">
                                <label for="old_pass">Name of the Departed:</label>
                                <input type="text" name="departed" placeholder="Enter name of the Departed">
                            </div>
                            @elseif($no_of_celebrant == 1 && $name == "seminar" or $name == "conference")
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
                                <label for="">Month/Year</label>
                                <input type="month" name="month" id="">
                            </div>
                            <div class="form-group col-lg-1">
                                <label for="">Day</label>
                                <select name="day" id="">
                                    <option value="1st">1</option>
                                    <option value="2nd">2</option>
                                    <option value="3rd">3</option>
                                    <option value="4th">4</option>
                                    <option value="5th">5</option>
                                    <option value="6th">6</option>
                                    <option value="7th">7</option>
                                    <option value="8th">8</option>
                                    <option value="9th">9</option>
                                    <option value="10th">10</option>
                                    <option value="11th">11</option>
                                    <option value="12th">12</option>
                                    <option value="13th">13</option>
                                    <option value="14th">14</option>
                                    <option value="15th">15</option>
                                    <option value="16th">16</option>
                                    <option value="17th">17</option>
                                    <option value="18th">18</option>
                                    <option value="19th">19</option>
                                    <option value="20th">20</option>
                                    <option value="21st">21</option>
                                    <option value="22nd">22</option>
                                    <option value="23rd">23</option>
                                    <option value="24th">24</option>
                                    <option value="25th">25</option>
                                    <option value="26th">26</option>
                                    <option value="27th">27</option>
                                    <option value="28th">28</option>
                                    <option value="29th">29</option>
                                    <option value="30th">30</option>
                                    <option value="31st">31</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-2">
                                <label for="">Time</label>
                                <input type="time" name="time" id="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@stop