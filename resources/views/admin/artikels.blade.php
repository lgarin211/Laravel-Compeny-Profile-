{{-- @dd($data); --}}
@extends('admin.index')
@section('pasing')
@if ( session('cas'))
<div class="alert alert-success">
    {{ session('cas') }}
</div>
@endif
<div id="daa">
    <div class="row" id="pac">
        <div class="col-md-4 mb-2">
            @include('admin.modal')
            <button class="btn btn-primary" onclick="showinart()">Add New Artikel</button>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            @yield('modaldevelopersrc')
        </div>
    </div>

    <div id="pas" class="container shodow-sm">
        @foreach ($data['artikels'] as $item)
        <div class="card">
            <div class="row">
                <h4 class="col-md-9">{{ $item->title }}</h4>
                <button type="button" class="btn btn-primary col-md-3" data-bs-toggle="modal"
                    data-bs-target="#art{{ $item->id}}">detail</button>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="card" id="inart">
    <div class="body">
        @foreach ($data['artikels'] as $key0=>$item)
        @if ($key0==0)
        <form method="POST" action="add" class="">
            <input type="hidden" name="tabel" value="artikels">
            @csrf
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9"></div>
                                <div class="col-md-3">
                                    <a href="#" onclick="viewdaa()" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                            <h5 class="card-title">Silahkan Melakukan Input</h5>
                            <div class="mb-3">
                                <div class="row">
                                    @foreach ($item as $key=>$itm)
                                    @if (!($key=='id'))
                                    @if (($key=='id'))
                                    @elseif ($key=='ce')
                                    @include('admin.ck')
                                    @elseif ($key=='created_at')
                                    <input type="hidden" name="{{$key}}" value="@php
date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
@endphp">
                                    @elseif ($key=='updated_at')
                                    <input type="hidden" name="{{$key}}" value="@php
date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
@endphp">
                                    @elseif ($key=="poster")
                                    <div class="col-md-12">
                                        <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="input-group mb-3">
                                                    <input id="thumbnail" class="img{{$item->id}} form-control"
                                                        type="text" placeholder="{{$key}}" name="{{$key}}"
                                                        aria-label="{{$key}}" aria-describedby="button-addon2">
                                                    <span class="input-group-btn">
                                                        <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                            class="btn btn-primary">
                                                            <i class="fa fa-picture-o"></i> Choose
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
                                    @elseif ($key=="cat")
                                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                        @foreach ($data['cat_artikels'] as $it)
                                        <input type="checkbox" class="btn-check" id="btncheck{{$it->id}}"
                                            autocomplete="off" name="{{$key}}" value="{{$it->Nama_Filter}}">
                                        <label class="btn btn-outline-primary"
                                            for="btncheck{{$it->id}}">{{$it->Nama_Filter}}</label>
                                        @endforeach
                                    </div>
                                    @else
                                    <div class="col-md-10">
                                        <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="{{$key}}"
                                                        name="{{$key}}" aria-label="{{$key}}"
                                                        aria-describedby="button-addon2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">kirim</button>
            </div>
        </form>
        @endif
        @endforeach
    </div>
</div>
<input type="hidden" id="nosi" value="{{asset('')}}admin/like?tabel=developer&key=">
<script>
    document.getElementById('inart').style="display:none"
function showinart(){
document.getElementById('daa').style="display:none"
document.getElementById('inart').style="display:"
// document.getElementById('pac').innerHTML=inart
}
function viewdaa(){
document.getElementById('daa').style="display:"
document.getElementById('inart').style="display:none"
}
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
