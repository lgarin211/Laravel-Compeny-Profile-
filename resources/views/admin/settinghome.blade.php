@extends('admin.index')
@section('pasing')
@if ( session('cas'))
<div class="alert alert-success">
    {{ session('cas') }}
</div>
@endif
<section>
<table>
    <th>
        <td>agus</td>
        <td>dom</td>
    </th>
</table>
</section>
@endsection
