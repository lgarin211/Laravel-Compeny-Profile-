{{-- @dd($data); --}}
@extends('admin.index')
@section('pasing')
@if ( session('cas'))
<div class="alert alert-success">
    {{ session('cas') }}
</div>
@endif
<div class="container card shadow-sm ">
    <div class="row">
        @foreach ($data['setting'] as $key=>$item)
        <div class="col-md-6">
            <form method="POST" action="pas" class="card ">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{$item->Attribut}}</label>
                    <input type="hidden" name="tabel" value="setting">
                    <input type="hidden" name="id" value="{{$item->id}}">
                    <textarea name="Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" cols="30" rows="10">{{$item->Name}}</textarea>
                    <div id="emailHelp" class="form-text">{{$item->grup}}</div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        @endforeach
    </div>
</div>

@endsection

