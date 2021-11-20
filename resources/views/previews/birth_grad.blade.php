<div id="myDiv" style="background-image: url(<?php echo $invite_details['template']; ?>);">
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
        <p style="font-size: 50px;"> you are cordially invited </p>

        <p>
            to the {{$invite_details['event']}} of our dear
        </p>

        <p class="name1-color celebrant" style="font-size:40px; text-transform:uppercase; font-weight:bold; font-family:Brush Script MT; font-style:oblique">
            {{$invite_details['celebrant']}}
        </p>
        <p>
            which holds on the
        </p>

        <div class="wedding-details1">
            <span class="date">{{$invite_details['date']}}</span>, Time: <span class="time">{{$invite_details['time']}}</span>
        </div>
        <br>
        <div class="wedding-details2" style="font-size:15px">
            <span style="font-weight: bold;">Venue:</span>
            <p class="venueDet">
                {{$invite_details['venue']}}
            </p>
            <span style="font-weight: bold;">Address:</span>
            <p class="streetAddress">
                {{$invite_details['address']}}
            </p>

        </div>
    </div>
</div>


</div>
</div>
</div>
</div>