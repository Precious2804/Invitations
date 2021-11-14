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
                                <div class="col-lg-7">
                                    <!-- contenteditable="true" -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="bg-result">
                                                <div class="toolbar">
                                                    <ul class="tool-list">
                                                        <li class="tool">
                                                            <button type="button" data-command='justifyLeft' class="tool--btn">
                                                                <i class=' fas fa-align-left'></i>
                                                            </button>
                                                        </li>
                                                        <li class="tool">
                                                            <button type="button" data-command='justifyCenter' class="tool--btn">
                                                                <i class=' fas fa-align-center'></i>
                                                            </button>
                                                        </li>
                                                        <li class="tool">
                                                            <button type="button" data-command="bold" class="tool--btn">
                                                                <i class=' fas fa-bold'></i>
                                                            </button>
                                                        </li>
                                                        <li class="tool">
                                                            <button type="button" data-command="italic" class="tool--btn">
                                                                <i class=' fas fa-italic'></i>
                                                            </button>
                                                        </li>
                                                        <li class="tool">
                                                            <button type="button" data-command="underline" class="tool--btn">
                                                                <i class=' fas fa-underline'></i>
                                                            </button>
                                                        </li>
                                                        <li class="tool">
                                                            <button type="button" data-command="insertOrderedList" class="tool--btn">
                                                                <i class=' fas fa-list-ol'></i>
                                                            </button>
                                                        </li>
                                                        <li class="tool">
                                                            <button type="button" data-command="insertUnorderedList" class="tool--btn">
                                                                <i class=' fas fa-list-ul'></i>
                                                            </button>
                                                        </li>
                                                        <li class="tool">
                                                            <button type="button" data-command="createlink" class="tool--btn">
                                                                <i class=' fas fa-link'></i>
                                                            </button>
                                                        </li>
                                                        <li class="tool">
                                                            <select onchange="execVal('fontName',this.value)">
                                                                <option value="Arial">Arial</option>
                                                                <option value="Comic Sans MS">Comic Sans MS</option>
                                                                <option value="Courier">Courier</option>
                                                                <option value="Georgia">Georgia</option>
                                                                <option value="Tahoma">Tahoma</option>
                                                                <option value="Times New Roman">Times New Roman</option>
                                                                <option value="Verdana">Verdana</option>
                                                                <option value="Poppins">Poppins</option>
                                                                <option value="Fruktur">Fruktur</option>
                                                                <option value="Lato">Lato</option>
                                                                <option value="Palatino">Palatino</option>
                                                                <option value="Irish Grover">Irish Grover</option>
                                                                <option value="Dancing Script">Dancing Script</option>
                                                                <option value="Raleway">Raleway</option>
                                                                <option value="Helvetica">Helvetica</option>
                                                                <option value="Cursive">Cursive</option>
                                                                <option value="Book Antiqua">Book Antiqua</option>
                                                                <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
                                                            </select>
                                                        </li>
                                                        <li class="tool">
                                                            <select onchange="execVal('fontSize', this.value)">
                                                                <option value="5">5</option>
                                                                <option value="10">10</option>
                                                                <option value="15">15</option>
                                                                <option value="20">20</option>
                                                                <option value="25">25</option>
                                                                <option value="30">30</option>
                                                                <option value="35">35</option>
                                                                <option value="40">40</option>
                                                                <option value="45">45</option>
                                                                <option value="50">50</option>
                                                                <option value="55">55</option>
                                                                <option value="60">60</option>
                                                                <option value="65">65</option>
                                                            </select>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div id="myDiv" style="background-image: url(<?php echo $select_temp; ?>);" contenteditable="true">
                                                    <div class="result-div">
                                                        <p class="header-color">
                                                            Please join us to celebrate the wedding of
                                                        </p>

                                                        <div>
                                                            <p class="couple-name name1-color bride">
                                                                {{$invite_details['bride']}}
                                                            </p>
                                                            <p class="wedding-and">
                                                                &
                                                            </p>
                                                            <p class="couple-name name2-color groom">
                                                                {{$invite_details['groom']}}
                                                            </p>
                                                        </div>

                                                        <div class="wedding-details1">
                                                            <p class="dateOutput">
                                                                Date: {{$invite_details['date']}}
                                                            </p>
                                                            <p class="timeOutput">
                                                                Time: {{$invite_details['time']}}
                                                            </p>
                                                        </div>
                                                        <br>
                                                        <div class="wedding-details2">
                                                            <p class="location">
                                                                Venue: {{$invite_details['venue']}}
                                                            </p>
                                                            <p class="streetAddress">
                                                                {{$invite_details['address']}}
                                                            </p>
                                                            <!-- <p>
                                                                <span class="city"> Enugu,</span>
                                                                <span class="state"> Enugu State</span>
                                                            </p> -->
                                                            <p class="receptionAddress">
                                                                Reception: {{$invite_details['reception_address']}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-div">
                                                <form>
                                                    <div class="hosted-by">
                                                        <label for="bride">
                                                            Name of Bride *
                                                        </label>
                                                        <input type="text" id="brideInput" onkeyup="brideFn()" value="{{$invite_details['bride']}}">
                                                    </div>
                                                    <div class="hosted-by">
                                                        <label for="groom">
                                                            Name of Groom *
                                                        </label>
                                                        <input type="text" id="groomInput" onkeyup="groomFn()" value="{{$invite_details['groom']}}">
                                                    </div>

                                                    <div>
                                                        <label for="eventTitle">
                                                            Event Date/Time*
                                                        </label>
                                                        <input type="date" id="dateFn" value="{{$invite_details['date']}}" />
                                                        <input type="time" id="timeFn" value="{{$invite_details['time']}}" />
                                                    </div>

                                                    <div>
                                                        <label for="location">
                                                            Name of Location
                                                        </label>
                                                        <input type="text" onkeyup="locationFn()" id="locationInput" value="{{$invite_details['venue']}}" />
                                                    </div>

                                                    <div>
                                                        <label for="street">
                                                            Street Address
                                                        </label>
                                                        <input type="text" id="street" onkeyup="streetFn()" value="{{$invite_details['address']}}" />
                                                    </div>
                                                    <div>
                                                        <label for="street">
                                                            Reception
                                                        </label>
                                                        <input type="text" id="reception" onkeyup="receptionFn()" value="{{$invite_details['reception_address']}}" />
                                                    </div>

                                                    <!-- <div>
                                                        <label for="city">
                                                            City
                                                        </label>
                                                        <input type="text" id="cityInput" onkeyup="cityFn()" required />
                                                    </div>

                                                    <div>
                                                        <label for="state">
                                                            State
                                                        </label>
                                                        <input type="text" id="stateInput" onkeyup="stateFn()" required />
                                                    </div> -->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>

@stop