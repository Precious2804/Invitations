<div>
    <hr>
    <h6>Change Template</h6>
    <div class="row">
        @foreach($templates as $item)
        <div class="col-lg-2">
            <a href="/change_temp?template={{$item->image}}&invite_id={{$invite_id}}">
                <div class="card">
                    <div class="card-body">
                        <img src="{{$item->image}}" alt="" style="width:100%;">
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <div class="row">
        {!! $templates->links() !!}
    </div>
    <div class="row">
        <form action="{{route('upload_temp')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="invite_id" value="{{$invite_id}}">
            <div class="form-group">
                <label for="" style="font-weight: bolder;">Upload a Template</label>
                <input type="file" name="template" class="form-control">
                <span class="text-danger"> @error('template') {{$message}} @enderror </span>
            </div>
            <div class="form-group">
                <button class="btn btn-info">Save Template</button>
            </div>
        </form>
    </div>
</div>