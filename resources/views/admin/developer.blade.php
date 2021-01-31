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
        @yield('modaldeveloper')
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4">
        @yield('modaldevelopersrc')
    </div>
</div>
<div id="pas" class="container shodow-sm">
    @foreach ($data['developer'] as $item)
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{asset('/').$item->Poster}}" class="gimg{{$item->id}}" alt="{{$item->Poster}}" width="100%" height="300px">
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
                        <a href="del?tabel=developer&id={{$item->id}}" class="btn btn-danger">HAPUS</a>
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<input type="hidden" id="nosi" value="{{asset('')}}admin/like?tabel=developer&key=">
<script>
    // const as=document.querySelector('.fint_JUDUL_BUKU');
    var base_url = document.getElementById('nosi').value;

    //event add
    function domdom() {
        var keywpr = document.getElementById('key');
        var contain = document.getElementById('pas');
        var link_query = base_url + keywpr.value
        fetch(link_query)
            .then((response) => response.text())
            .then((response) => (contain.innerHTML = response));
        // val ajax Kurian WPU Eps13

    }
</script>
@endsection
