<div id="myDiv" style="background-image: url(<?php echo $invite_details['template']; ?>);">
    <div class="result-div">
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


</div>
</div>
</div>
</div>