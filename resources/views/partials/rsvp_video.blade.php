<div class="col-lg-12">
    <span style="font-weight: bold;">RSVP</span>
    <p class="rsvpStat">
        {{$invite_details['rsvp']}}
    </p>
</div>
@if($invite_details['video_url'])
<a href="{{$invite_details['video_url']}}" target="_blank">
    <span style="font-weight: bold; color:blue">Click to watch Video Now</span>
</a>
@endif