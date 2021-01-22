@foreach ($data['developer'] as $item)
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{$item->Poster}}" class="gimg{{$item->id}}" alt="{{$item->Poster}}" width="100%" height="300px">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$item->Name_Developer}}</h5>

                <p class="card-text">Bidang : {{$item->Bidang}}</p>
                <p class="card-text">sosial media
                <ul>
                    <li>facebook : {{$item->facebook}}</li>
                    <li>Github : {{$item->github}}</li>
                    <li>Twiter : {{$item->Name_Developer}}</li>
                </ul>
                </p>
                <p class="card-text">About : {{$item->Deskripsi}}</p>
                <p class="card-text"><small class="text-muted">
                        <a href="pas?tabel=developer&id={{$item->id}}&view=editdeveloper" class="btn btn-primary">edit</a>
                    </small>
                </p>
            </div>
        </div>
    </div>
</div>
@endforeach
