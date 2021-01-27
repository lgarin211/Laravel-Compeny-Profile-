@extends('admin.index')
@section('pasing')
@if ( session('cas'))
<div class="alert alert-success">
    {{ session('cas') }}
</div>
@endif
@include('admin.modal')
@yield('modalsetting')
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 row">
            <h6 class="m-0 font-weight-bold text-primary col-md-9">Data Setting tabel</h6>
            <h6 class="m-0 font-weight-bold text-primary col-md-3" id="ps"><button type="button"
                    class="btn btn-primary col-md-6" onclick="bas()">Edit Data</button>
            </h6>
            <h6 class="m-0 font-weight-bold text-primary col-md-3" id="ps1">
                <button type="button" class="btn btn-warning col-md-6" onclick="gajadi()">Cancel</button>
            </h6>

        </div>
        <div class="card-body" id="ops">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                                role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending" style="width: 3px;">#
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 274.36px;">KEY</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 120.08px;">VALUE</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">#</th>
                                        <th rowspan="1" colspan="1">KEY</th>
                                        <th rowspan="1" colspan="1">VALUE</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($data['setting'] as $key=>$item)
                                    <tr role="row" class="odd">
                                        <td class="sorting_{{$key}}">{{$key}}</td>
                                        <td>{{$item->Attribut }}</td>
                                        <td>{{$item->Name }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- </div> --}}

        {{-- </div> --}}
        <div id="edit">
            <div class="row">
                @foreach ($data['setting'] as $key=>$item)
                @if ($item->Attribut=='id')
                @else
                <div class="col-md-12 mb-1">
                    <form method="POST" action="pas" class="card">
                        @csrf
                        <div class="input-group">
                            <a href="del?tabel=setting&id={{$item->id}}" type="button" class="btn btn-success">
                                <i class="fas fa-trash" aria-hidden="true"></i>
                            </a>
                            <span class="input-group-text">{{$item->Attribut}}</span>
                            <input type="hidden" name="tabel" value="setting">
                            <input type="hidden" name="id" value="{{$item->id}}">
                            <textarea class="form-control" aria-label="With textarea" name="name"
                                style="max-height: 100px">{{$item->Name}}</textarea>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <script>
        var edit=document.getElementById('edit').innerHTML
        var tabel=document.getElementById('ops').innerHTML
        var editb=document.getElementById('ps').innerHTML
        var cencel=document.getElementById('ps1').innerHTML

        document.getElementById('ps1').innerHTML=''
        document.getElementById('edit').innerHTML=''
        function bas(){
        document.getElementById('ops').innerHTML=edit
        document.getElementById('ps').innerHTML=cencel
        }
        function gajadi(){
        document.getElementById('ps').innerHTML=editb
        document.getElementById('ops').innerHTML=tabel
        }
    </script>
    @endsection
