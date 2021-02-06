{{-- @dd($data); --}}
@extends('admin.index')
@section('pasing')
@if ( session('cas'))
<div class="alert alert-success">
    {{ session('cas') }}
</div>
@endif
<div class="row">
    <div class="col-md-4 mb-2">
        @include('admin.modal')
        @yield('modalsliders')
    </div>
    <div class="col-md-4"></div>
</div>
<div id="pas" class="container shodow-sm">
    @foreach ($data['sliders'] as $item)
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{asset('/').$item->Poster}}" class="gimg{{$item->id}}" alt="{{$item->Poster}}" width="100%" height="300px">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$item->Title}}</h5>
                    <p class="card-text">About : {{$item->Deskripsi}}</p>
                    <p class="card-text"><small class="text-muted">
                        <a href="pas?tabel=sliders&id={{$item->id}}&view=editsliders" class="btn btn-primary">edit</a>
                        <a href="del?tabel=sliders&id={{$item->id}}" class="btn btn-danger">HAPUS</a>
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
