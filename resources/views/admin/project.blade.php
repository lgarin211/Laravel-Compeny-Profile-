{{-- @dd($data); --}}
@extends('admin.index')
@section('pasing')
@if ( session('cas'))
<div class="alert alert-success">
    {{ session('cas') }}
</div>
@endif
<div class="container shodow-sm">
    @foreach ($data['project'] as $item)
    <form action="pas" method="POST">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">{{$item->Name_Project}} <small>from:</small>
                    <span class="text-muted">{{$item->Pemesan}}</span>
                </h2>
                <p class="lead">
                    <ul class="list-group">
                        @csrf
                        <input type="hidden" name="tabel" value="project">
                        @foreach ($item as $key=>$itm)
                        <li class="list-group-item input-group-sm">
                            @if ($key=='filter')
                            @foreach ($itm as $fil)
                            {{ $fil }}
                            @endforeach
                            @else
                            <input class="form-control" type="text" name="{{$key}}" value="{{$itm}}">
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                    src="{{$item->Img}}" width="500">
            </div>
        </div>
        <button type="submit">kirim</button>
        <hr>
    </form>
    @endforeach
</div>


@endsection
