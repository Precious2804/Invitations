<div id="myDiv" style="background-image: url(<?php echo $invite_details['template']; ?>);">
    <div class="">
        <div style="padding: 10px;">
            <div class="row d-flex justify-content-center">
                <p style="font-weight: bolder; font-family:'Times New Roman', Times, serif; color:#660066">INVITATION! INVITATION!! INVITATION!!!</p>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-dark company" style="text-transform: uppercase; font-weight:bolder; font-family:'Times New Roman', Times, serif;">{{$invite_details['company_name']}}</p>
                    <p>PRESENTS</p>
                    <br>
                    <p class="titleDet text-danger" style="text-transform: uppercase; font-size:45px; font-weight:bolder; line-height:1.0; font-family:'Times New Roman', Times, serif;">{{$invite_details['title']}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <span class="topic" style="text-transform: capitalize; line-height:1.0; color:orange">{{$invite_details['topic']}}</span>
                    <br>
                    <br>
                    <br>

                    <p style="font-size: 20px; font-weight:bolder"><span class="date">{{$invite_details['date']}}</span></p>
                    <p style="font-family:'Times New Roman', Times, serif; font-size:25px">TIME: <span class="time">{{$invite_details['time']}}</span></p>
                    <p>Venue: <span style="text-transform: capitalize; font-weight:bold" class="venueDet">{{$invite_details['venue']}}</span></p>
                </div>
                @if($invite_details['photo'])
                <div class="col-lg-6">
                    <div class="box" style="border-radius: 50px 20px">
                        <img src="{{$invite_details['photo']}}" style="width: 100%; height:100%; border-radius: 50px 20px" alt="">
                    </div>
                </div>
                @endif
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