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
        @yield('modalartikel')
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4">
        @yield('modaldevelopersrc')
    </div>
</div>
<div id="pas" class="container shodow-sm">
    @foreach ($data['artikels'] as $item)
    <div class="card">
        @foreach($item as $key=>$itm)
        @if($key=="ce")
        {{htmlspecialchars($itm)}}
        @else
        {{ $itm }}
        @endif
        @endforeach
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
