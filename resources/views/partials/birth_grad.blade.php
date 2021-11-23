@if(Session::get('saved'))
<div class="alert alert-success">
    {{Session::get('saved')}}
</div>
@endif
<div id="myDiv" style="background-image: url(<?php echo $select_temp; ?>);" contenteditable="true">
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

        <p class="name2-color celebrant" style="font-size:40px; text-transform:uppercase; font-weight:bold; font-family:Brush Script MT; font-style:oblique">
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
                            Name of Celebrant
                        </label>
                        <input type="text" name="celebrant" id="celebrantInput" onkeyup="celebrantFn()" value="{{$invite_details['celebrant']}}">
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