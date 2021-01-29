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
    @forelse ($data['artikels'] as $key=>$item)
    @csrf
    @if ($key=='pas')
    @include('admin.ck')
    @endif
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">{{ $key }}</span>
        <input type="text" class="form-control" placeholder="{{ $key }}" aria-label="{{ $key }}" aria-describedby="basic-addon1">
    </div>
    @empty
    {{-- empty expr --}}
    @endforelse
    <button type="submit" class="btn btn-primary">kirim artikel</button>
</form>

@endsection
