@extends('admin.index')
@section('pasing')
@if ( session('cas'))
@section('pasing')
<div class="alert alert-success">
    {{ session('cas') }}
</div>
@endif

<div class="col-md-6">
    <h2 class="mt-4">Standalone Image Button</h2>
    <div class="input-group">
        <span class="input-group-btn">
            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                <i class="fa fa-picture-o"></i> Choose
            </a>
        </span>
        <input id="thumbnail" class="form-control" type="text" name="filepath">
    </div>
    <div id="holder" style="margin-top:15px;max-height:100px;">
        <img src="http://localhost/CODE/Company-PP//storage/photos/1/thumbs/IMG_20190613_202344 - Copy.jpg"
            style="height: 5rem;">
    </div>
</div>
@include('scripFilemanager')
@yield('Jscrip')
@endsection
