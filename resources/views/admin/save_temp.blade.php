<form action="{{route('save_now')}}" enctype="multipart/form-data" method="POST">
    @csrf
    @if(Session::get('done'))
    <div class="alert-success">
        {{Session::get('done')}}
    </div>
    @endif
    <label for="">Name</label>
    <input type="text" name="name">
    <label>Browse Image</label>
    <input type="file" name="image"> <br>
    <input type="submit" value="Submit">
</form>