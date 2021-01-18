{{-- @dd($data); --}}
@extends('admin.index')
@section('pasing')
@if ( session('cas'))
<div class="alert alert-success">
    {{ session('cas') }}
</div>
@endif
@include('admin.modal')
@yield('modalproject')
<div class="container shodow-sm">
    <div class="container marketing">
        <!-- START THE FEATURETTES -->
        @foreach ($data['project'] as $key=>$item)
        @if ($key%2==1)
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">{{$item->Name_Project}}<br><span
                        class="text-muted"><small>{{$item->Pemesan}}</small></span></h2>
                <p class="lead">
                    {{$item->Deskripsi}} <br>Project Dapat di lihat di <a href="{{$item->link}}">
                        {{$item->link}}</a><br><a href="pas?tabel=project&id={{$item->id}}&view=editproject"
                        class="btn btn-primary">edit</a>
                </p>
            </div>
            <div class="col-md-5">
                <img src="{{$item->Img}}"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="250px"
                    height="250px" role="img">

            </div>
        </div>
        @else
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">{{$item->Name_Project}}<br><span
                        class="text-muted"><small>{{$item->Pemesan}}</small></span></h2>
                <p class="lead">
                    {{$item->Deskripsi}} <br>Project Dapat di lihat di <a href="{{$item->link}}">
                        {{$item->link}}</a><br><a href="pas?tabel=project&id={{$item->id}}&view=editproject"
                        class="btn btn-primary"><i class="fas fa-user-edit" aria-hidden="true">  Edit</i></a>
                </p>
            </div>
            <div class="col-md-5">
                <img src="{{$item->Img}}"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500px"
                    height="500px" role="img">
            </div>
        </div>
        @endif
        @endforeach

        <!-- /END THE FEATURETTES -->

    </div>
</div>


@endsection
