{{-- @dd($data); --}}
@extends('admin.index')
@section('pasing')
@if ( session('cas'))
<div class="alert alert-success">
    {{ session('cas') }}
</div>
@endif
<form method="POST" action="add">
    <input type="hidden" name="tabel" value="artikels">
    @csrf
    @foreach ($data['artikels'] as $key=>$item)
    @if ($key==1)
    @else
    @foreach ($item as $key2=>$value)
    @if ($key2=='ce')
    @include('admin.ck')
    @else
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">{{ $key2 }}</span>
        <input type="text" class="form-control" name="{{ $key2 }}" placeholder="{{ $value }}" aria-describedby="basic-addon1">
    </div>
    @endif
    @endforeach
    @endif
    @endforeach

    <button type="submit" class="btn btn-primary">kirim artikel</button>
</form>

@endsection
