<div id="myDiv" style="background-image: url(<?php echo $invite_details['template']; ?>);" contenteditable="true">
    <div class="">
        <div class="row d-flex justify-content-center">
            <p style="font-weight: bold; font-family:'Times New Roman', Times, serif; color:#660066">INVITATION! INVITATION!! INVITATION!!!</p>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <p style="text-transform: uppercase; font-weight:bold;" class="name2-color">{{$invite_details['company_name']}}</p>
                <p>PRESENTS</p>
                <br>
                <span style="text-transform: uppercase; font-size:45px; font-weight:bolder; line-height:1.0; font-family:'Times New Roman', Times, serif">{{$invite_details['title']}}</span> <br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <span style="text-transform: capitalize; font-weight:bold; line-height:1.0">{{$invite_details['topic']}}</span>
                <br>
                <br>
                <br>

                <p style="font-size: 20px; font-weight:bolder">{{$invite_details['date']}}</p>
                <p style="font-family:'Times New Roman', Times, serif; font-size:25px">TIME: <span>{{$invite_details['time']}}</span></p>
                <p>Venue: <span style="text-transform: capitalize; font-weight:bold">{{$invite_details['venue']}}</span></p>
            </div>
            @if($invite_details['photo'])
            <div class="col-lg-6">
                <div class="box" style="border-radius: 50px 20px">
                    <img src="{{$invite_details['photo']}}" style="width: 100%; height:100%; border-radius: 50px 20px" alt="">
                </div>
            </div>
            @endif
        </div>

    </div>
</div>


</div>
</div>
</div>
</div>
