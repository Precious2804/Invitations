<div>
    <hr>
    <h6>Change Template</h6>
    <div class="row">
        @foreach($templates as $item)
        <div class="col-lg-2">
            <a href="/change_temp?invite_id={{$invite_id}}&template={{$item->image}}">
                <div class="card">
                    <div class="card-body">
                        <img src="{{$item->image}}" alt="" style="width:100%;">
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>