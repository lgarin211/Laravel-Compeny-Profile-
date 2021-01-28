@foreach ($data['servides'] as $key=>$item)
@if ($key%2==1)
<hr class="featurette-divider">
<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">{{$item->Title}}<br><span
                class="text-muted"><small>{{$item->Desc}}</small></span></h2>
        <p class="lead fs-6">
            <a href="pas?tabel=servides&id={{$item->id}}&view=editservides" class="btn btn-primary">
                <i class="fas fa-user-edit" aria-hidden="true"> Edit</i></a>
            <a href="del?tabel=servides&id={{$item->id}}" href="" class="btn btn-danger"><i class="fas fa-trash"
                    aria-hidden="true"> Hapus</i></a>
        </p>
    </div>
    <div class="col-md-5">
        <i class="fa-7x fa-fw {{$item->icon}} ">
        </i>
    </div>
</div>
@else
<hr class="featurette-divider">
<div class="row featurette">
    <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">{{$item->Title}}<br><span
                class="text-muted"><small>{{$item->Desc}}</small></span></h2>
        <p class="lead fs-6">
            <a href="pas?tabel=servides&id={{$item->id}}&view=editservides" class="btn btn-primary">
                <i class="fas fa-user-edit" aria-hidden="true"> Edit</i></a>
            <a href="del?tabel=servides&id={{$item->id}}" class="btn btn-danger"><i class="fas fa-trash"
                    aria-hidden="true"> Hapus</i></a>
        </p>
    </div>
    <div class="col-md-5">
        <i class="fa-7x fas fa-fw {{$item->icon}}">
        </i>
    </div>
</div>
@endif
@endforeach
