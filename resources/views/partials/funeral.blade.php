@if(Session::get('saved'))
<div class="alert alert-success">
    {{Session::get('saved')}}
</div>
@endif
<div id="myDiv" style="background-image: url(<?php echo $select_temp; ?>);" contenteditable="true">
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
        <span class="name2-color departed" style="font-size:40px; text-transform:uppercase; font-weight:bold; font-family:Brush Script MT;">
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
                <form action="{{route('save_invite')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="event_name" value="{{$invite_details['event_name']}}">
                    <input type="hidden" name="event" value="{{$invite_details['event']}}">
                    <input type="hidden" name="invite_id" value="{{$invite_id}}">
                    <div class="hosted-by">
                        <label for="">
                            Name of Departed
                        </label>
                        <input type="text" name="departed" id="departedInput" onkeyup="departedFn()" value="{{$invite_details['departed']}}">
                    </div>
                    <div>
                        <label for="">
                            Duration of Life
                        </label>
                        <input type="text" name="duration" id="durationInput" onkeyup="durationFn()" value="{{$invite_details['duration']}}">
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

                    <div class="form-group">
                        <label for="venueDet">
                            Venue
                        </label>
                        <input type="text" name="venue" id="venueInput" onkeyup="venueFn()" value="{{$invite_details['venue']}}" />
                    </div>
                    <div class="form-group">
                        <label for="">
                            Color(s)
                        </label>
                        <input type="text" name="color" id="colorInput" onkeyup="colorFn()" value="{{$invite_details['color']}}" />
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