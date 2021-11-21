<div id="myDiv" style="background-image: url(<?php echo $invite_details['template']; ?>);" contenteditable="true">
    <div class="result-div">
        <p style="font-size: 35px; font-weight:bold"> TRANSITION TO GLORY</p>
        @if($invite_details['photo'])
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6" style="box-shadow: 5px 10px #888888; border-radius: 50px 20px">
                <img src="{{$invite_details['photo']}}" style="width: 100%; height:100%; border-radius: 50px 20px" alt="">
            </div>
        </div>
        @endif
        <br>
        <span class="departed" style="font-size:40px; text-transform:uppercase; font-weight:bold; font-family:Brush Script MT;">
            {{$invite_details['departed']}}
        </span>
        <span class="duration" style="font-size: 20px; font-family:cursive; font-weight:bold">{{$invite_details['duration']}}</span>
        <hr>

        <div class="">
            <p>Funeral service to take place at {{$invite_details['venue']}},</p>
            <p>on the <span class="date">{{$invite_details['date']}}</span>, by <span class="time">{{$invite_details['time']}}</span></p>
        </div>
        <br>
        @if($invite_details['color'])
        <div class="alert alert-primary">
            Dress to celebrate life and mourn in <span class="color">{{$invite_details['color']}}</span>
        </div>
        @endif
    </div>
</div>


</div>
</div>
</div>
</div>
