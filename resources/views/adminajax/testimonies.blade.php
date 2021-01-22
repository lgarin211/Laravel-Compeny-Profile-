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
                            <a href="pas?tabel=testimonies&id={{$item->id}}&view=edittestimoni" type="button" class="btn btn-danger col-md-6">
                                <i class="fas fa-user-edit" aria-hidden="true"></i>
                            </a>
                            <button type="button" class="btn btn-success col-md-6">
                                <i class="fas fa-trash" aria-hidden="true"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
