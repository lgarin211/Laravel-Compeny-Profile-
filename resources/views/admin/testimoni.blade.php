@extends('admin.index')
@section('pasing')

<section class="container">
    <div class="row">
        <div class="col-md-4">
        @include('admin.modal')
            @yield('modalTestimony')
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="cari" aria-label="Recipient's username"
                aria-describedby="button-addon2">
        </div>
    </div>

    <div class="bg-light">
        <table class="table table-responsive ">
            <thead>
                <tr class="bg-secondary">
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nama Perusahaan</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['testimonies'] as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->Nama}}</td>
                    <td>{{$item->compeny}}</td>
                    <td>{{$item->Deskripsi}}</td>
                    <td>
                        <a href="{{$item->Gambar}}">
                            <img src="{{$item->Gambar}}" class="w-50" style="max-height: 200px; width: fit-content">
                        </a>
                    </td>
                    <td>
                        <div class="row">
                            <a href="pas?tabel=testimonies&id={{$item->id}}&view=edittestimoni" type="button"
                                class="btn btn-danger col-md-6">
                                <i class="fas fa-user-edit" aria-hidden="true"></i>
                            </a>
                            <button type="button" class="btn btn-success col-md-6">
                                <i class="fas fa-trash" aria-hidden="true"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"> Hapus</i>
    </button>
</section>
@endsection
