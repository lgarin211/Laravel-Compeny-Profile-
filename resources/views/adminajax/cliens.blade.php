
        @foreach ($data['cliens'] as $key=>$item)
        @if ($key%2==1)
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">{{$item->Name}}</h2>
                <a href="pas?tabel=clienst&id={{$item->id}}&view=editcliens" class="btn btn-primary"><i
                        class="fas fa-user-edit" aria-hidden="true"> Edit</i></a>
                <a href="del?tabel=cliens&id={{$item->id}}" class="btn btn-danger"><i class="fas fa-trash" aria-hidden="true"> Hapus</i></a>
                </p>
            </div>
            <div class="col-md-5">
                <img src="{{$item->Poster}}"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="250px"
                    height="250px" role="img">

            </div>
        </div>
        @else
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">{{$item->Name}}</h2>
                <a href="pas?tabel=project&id={{$item->id}}&view=editproject" class="btn btn-primary"><i
                        class="fas fa-user-edit" aria-hidden="true"> Edit</i></a>
                <a href="" class="btn btn-danger"><i class="fas fa-trash" aria-hidden="true"> Hapus</i></a>
                </p>
            </div>
            <div class="col-md-5">
                <img src="{{$item->Poster}}"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="250px"
                    height="250px" role="img">
            </div>
        </div>
        @endif
        @endforeach
