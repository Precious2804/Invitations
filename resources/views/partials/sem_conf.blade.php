@if(Session::get('saved'))
<div class="alert alert-success">
    {{Session::get('saved')}}
</div>
@endif
<div id="myDiv" style="background-image: url(<?php echo $select_temp; ?>);" contenteditable="true">
    <div class="">
        <div class="row d-flex justify-content-center">
            <p style="font-weight: bold; font-family:'Times New Roman', Times, serif; color:#660066">INVITATION! INVITATION!! INVITATION!!!</p>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <p class="name2-color company" style="text-transform: uppercase; font-weight:bold;">{{$invite_details['company_name']}}</p>
                <p>PRESENTS</p>
                <br>
                <p class="title" style="text-transform: uppercase; font-size:45px; font-weight:bolder; line-height:1.0; font-family:'Times New Roman', Times, serif">{{$invite_details['title']}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <span class="topic" style="text-transform: capitalize; font-weight:bold; line-height:1.0">{{$invite_details['topic']}}</span>
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
        </div>

    </div>
</div>


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
                            Company Name
                        </label>
                        <input type="text" name="company_name" id="companyInput" onkeyup="companyFn()" value="{{$invite_details['company_name']}}">
                    </div>
                    <div class="hosted-by">
                        <label for="">
                            Programme Title/Theme
                        </label>
                        <input type="text" name="title" id="titleInput" onkeyup="titleFn()" value="{{$invite_details['title']}}">
                    </div>
                    <div class="">
                        <label for="">
                            Programme Topic
                        </label>
                        <input type="text" name="topic" id="topicInput" onkeyup="topicFn()" value="{{$invite_details['topic']}}">
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