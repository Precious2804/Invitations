@if(Session::get('saved'))
<div class="alert alert-success">
    {{Session::get('saved')}}
</div>
@endif
<div id="myDiv" style="background-image: url(<?php echo $select_temp; ?>);">
    <div class="result-div">
        @if($invite_details['photo'])
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="box" style="box-shadow: 5px 10px #888888; border-radius: 50px 20px">
                    <img src="{{$invite_details['photo']}}" style="width: 100%; height:100%; border-radius: 50px 20px" alt="">
                </div>
            </div>
        </div>
        @endif
        <p class="header-color">
            With extreme Gladness of heart, we the families of
        </p>
        <p class="fam-name brideFam" style="font-weight: bold;">
            {{$invite_details['bride_fam']}}
        </p>
        <p>
            &
        </p>
        <p class="fam-name groomFam" style="font-weight: bold;">
            {{$invite_details['groom_fam']}}
        </p>
        <span>Cordially invites you to the Wedding Celebration joining the lives of</span>

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
            <span class="date">{{$invite_details['date']}}</span>, Time: <span class="time">{{$invite_details['time']}}</span>
        </div>
        <br>
        <div class="wedding-details2" style="font-size:15px">
            <div class="row">
                <div class="col-lg-6">
                    <span style="font-weight: bold;">Venue:</span>
                    <p class="venueDet">
                        {{$invite_details['venue']}}
                    </p>
                </div>
                <div class="col-lg-6">
                    <span style="font-weight: bold;">Address:</span>
                    <p class="streetAddress">
                        {{$invite_details['address']}}
                    </p>
                </div> <br><br>
                <div class="col-lg-6">
                    <span style="font-weight: bold;">Reception:</span>
                    <p class="receptionAddress">
                        {{$invite_details['reception']}}
                    </p>
                </div>
                <div class="col-lg-6">
                    <span style="font-weight: bold;">Toast:</span>
                    <p class="toastStat" style="font-size:13px;">
                        {{$invite_details['toast']}}
                    </p>
                </div>
                <div class="col-lg-12">
                    <span style="font-weight: bold;">Color(s) of the day:</span>
                    <p class="colorStat">
                        {{$invite_details['color']}}
                    </p>
                </div>
                <div class="col-lg-12">
                    <span style="font-weight: bold;">RSVP</span>
                    <p class="rsvpStat">
                        {{$invite_details['rsvp']}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@include('partials.change_temp')


</div>
</div>
</div>
</div>

<div class="col-lg-4">
    <div class="card">
        <div class="card-body">
            <div class="form-div">
                <form action="{{route('save_invite')}}" method="POST">
                    @csrf
                    <input type="hidden" name="event_name" value="{{$invite_details['event_name']}}">
                    <input type="hidden" name="event" value="{{$invite_details['event']}}">
                    <input type="hidden" name="invite_id" value="{{$invite_id}}">
                    <div class="hosted-by">
                        <label for="brideFam">
                            Bride's Family
                        </label>
                        <input type="text" id="bridefamInput" name="bride_fam" onkeyup="brideFamFn()" value="{{$invite_details['bride_fam']}}">
                    </div>
                    <div class="hosted-by">
                        <label for="groomFam">
                            Groom's Family
                        </label>
                        <input type="text" name="groom_fam" id="groomFamInput" onkeyup="groomFamFn()" value="{{$invite_details['groom_fam']}}">
                    </div>
                    <div class="hosted-by">
                        <label for="bride">
                            Name of Bride
                        </label>
                        <input type="text" name="bride" id="brideInput" onkeyup="brideFn()" value="{{$invite_details['bride']}}">
                    </div>
                    <div class="hosted-by">
                        <label for="groom">
                            Name of Groom
                        </label>
                        <input type="text" name="groom" id="groomInput" onkeyup="groomFn()" value="{{$invite_details['groom']}}">
                    </div>


                    <div class="row">
                        <div class="col-lg-9">
                            <label for="date">
                                Date
                            </label>
                            <input type="text" name="date" id="dateOutput" onkeyup="dateFn()" value="{{$invite_details['date']}}" /> <br>
                        </div>
                        <div class="col-lg-3">
                            <label for="time">
                                Time
                            </label>
                            <input type="text" name="time" id="timeOutput" onkeyup="timeFn()" value="{{$invite_details['time']}}" />
                        </div>
                    </div>

                    <div>
                        <label for="venueDet">
                            Venue
                        </label>
                        <input type="text" name="venue" id="venueInput" onkeyup="venueFn()" value="{{$invite_details['venue']}}" />
                    </div>

                    <div>
                        <label for="street">
                            Street Address
                        </label>
                        <input type="text" name="address" id="street" onkeyup="streetFn()" value="{{$invite_details['address']}}" />
                    </div>
                    <div>
                        <label for="street">
                            Reception
                        </label>
                        <input type="text" name="reception" id="reception" onkeyup="receptionFn()" value="{{$invite_details['reception']}}" />
                    </div>
                    <div>
                        <label for="toastStat">
                            Toast
                        </label>
                        <input type="text" name="toast" id="toastInput" value="{{$invite_details['toast']}}" onkeyup="toastFn()">
                    </div>
                    <div>
                        <label for="colorStat">
                            Color(s)
                        </label>
                        <input type="text" name="color" id="colorInput" value="{{$invite_details['color']}}" onkeyup="colorFn()">
                    </div>
                    <div>
                        <label for="rsvpStat">
                            RSVP(s)
                        </label>
                        <input type="text" name="rsvp" id="rsvpInput" value="{{$invite_details['rsvp']}}" onkeyup="rsvpFn()">
                    </div>
                    <div class="form-group">
                        <label for="image">
                            Upload Image
                        </label>
                        <input type="file" class="form-control" name="photo">
                        <input type="hidden" class="form-control" name="old_photo" value="{{$invite_details['photo']}}">
                        <span class="text-muted">Hint: Use Images with transparent backgrounds</span>
                        <span class="text-danger"> @error('photo') {{$message}} @enderror </span>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-dark">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>