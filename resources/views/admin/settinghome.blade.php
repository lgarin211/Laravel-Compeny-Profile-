@extends('admin.index')
@section('pasing')
@if ( session('cas'))
<div class="alert alert-success">
    {{ session('cas') }}
</div>
@endif
<html>
    <head>

    </head>
    <body>
        <thead>
            <td>ingfo</td>
            <td>cobain</td>
            <td>dulu</td>
        </thead>
        <tbody>
            <td>no ingfo</td>
        </tbody>
    </body>
</html>

@endsection
