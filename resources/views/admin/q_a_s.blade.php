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
        @yield('modalAQ')
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4">
        @yield('modaldevelopersrc')
    </div>
</div>
<div id="pas" class="container shodow-sm">
    <div class="container marketing">
        <!-- START THE FEATURETTES -->
        @foreach ($data['q_a_s'] as $key=>$item)
        <div class="card">
            <div class="row text-center">
                <div class="Q col-md-6">
                    <h3>Q:</h3>
                    <p>{{$item->Q}}</p>
                </div>
                <div class="A col-md-6">
                    <h3>A:</h3>
                    <p>{{$item->A}}</p>
                </div>
            </div>
        </div>
        @endforeach
        <!-- /END THE FEATURETTES -->
    </div>
</div>

<input type="hidden" id="nosi" value="{{asset('')}}admin/like?tabel=project&key=">
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
