{{-- @dd($data); --}}
@extends('admin.index')
@section('pasing')
@if ( session('cas'))
<div class="alert alert-success">
    {{ session('cas') }}
</div>
@endif
<div class="container card shadow-sm ">
    <div id="tabel">
        <table class="table table-responsive">
            <thead>
                <tr class="bg-secondary">
                    <th scope="col">#</th>
                    <th scope="col">Key</th>
                    <th scope="col">Value</th>
                </tr>
            </thead>
            <tbody>
    @foreach ($data['setting'] as $key=>$item)
                <tr>
                    <td>{{ 1}}</td>
                    <td>{{ $item->Attribut }}</td>
                    <td>{{ $item->Name }}</td>
                </tr>
                        @endforeach 
            </tbody>
        </table>
        <button type="button" class="btn btn-success col-md-6" onclick="muncul()">
                                <i class="fas fa-user-edit" aria-hidden="true">Edit</i>
                            </button>
    </div>
    <div id="edit">
        <button type="button" class="btn btn-success col-md-6" onclick="gajadi()">
                                  Cancel</button>
    
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
</div>
<script>
    var a = document.getElementById('edit').innerHTML
    var c = document.getElementById('tabel').innerHTML
        var b = document.getElementById('edit').innerHTML=''
    function muncul() {
        document.getElementById('tabel').innerHTML=b
        document.getElementById('edit').innerHTML=a
            }
            function gajadi() {
        document.getElementById('edit').innerHTML=b
        document.getElementById('tabel').innerHTML=c
            }
</script>

@endsection

