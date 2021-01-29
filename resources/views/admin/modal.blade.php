@section('modaldeveloper')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New Developers
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($data['developer'] as $key=>$item)
                <form method="POST" action="add" class="">
                    <input type="hidden" name="tabel" value="developer">
                    @csrf
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div id="holder">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Silahkan Melakukan Input</h5>
                                    <div class="mb-3">
                                        <div class="row">
                                            @foreach ($item as $key=>$itm)
                                            @if (!($key=='id'))
                                            @if ($key=="Poster")
                                            <div class="col-md-12">
                                                <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="input-group mb-3">
                                                            <input id="thumbnail" class="img{{$item->id}} form-control"
                                                            type="text" placeholder="{{$key}}" name="{{$key}}"
                                                            aria-label="{{$key}}" aria-describedby="button-addon2">
                                                            <span class="input-group-btn">
                                                                <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                                class="btn btn-primary">
                                                                <i class="fa fa-picture-o"></i> Choose
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
                                        @elseif ($key=='Deskripsi')
                                        <div class="col-md-12">
                                            <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <textarea type="text" class="form-control"
                                                        placeholder="{{$key}}" name="{{$key}}"
                                                        aria-label="{{$key}}" aria-describedby="button-addon2"
                                                        rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-md-5">
                                            <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control"
                                                        placeholder="{{$key}}" name="{{$key}}"
                                                        aria-label="{{$key}}" aria-describedby="button-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <?break;?>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
@endsection

{{-- Section search --}}
@section('modaldevelopersrc')
<div class="input-group mb-3">
    <input type="text" id="key" class="form-control" onkeyup="domdom()" placeholder="cari"
    aria-label="Recipient's username" aria-describedby="button-addon2">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>
</div>
@endsection



@section('modalproject')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New Project
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($data['project'] as $key=>$item)
                <form method="POST" action="add" class="">
                    <input type="hidden" name="tabel" value="project">
                    @csrf
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div id="holder">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Silahkan Input Project</h5>
                                    <div class="mb-3">
                                        <div class="row">
                                            @foreach ($item as $key=>$itm)
                                            @if (!($key=='id'))
                                            @if ($key=="Img")
                                            <div class="col-md-12">
                                                <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="input-group mb-3">
                                                            <input id="thumbnail" class="img{{$item->id}} form-control"
                                                            type="text" placeholder="{{$key}}" name="{{$key}}"
                                                            aria-label="{{$key}}" aria-describedby="button-addon2">
                                                            <span class="input-group-btn">
                                                                <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                                class="btn btn-primary">
                                                                <i class="fa fa-picture-o"></i> Choose
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
                                        @elseif ($key=='filter')
                                        <div class="btn-group" role="group"
                                        aria-label="Basic checkbox toggle button group">
                                        @foreach ($data['cat_project'] as $it)
                                        <input type="checkbox" class="btn-check" id="btncheck{{$it->id}}"
                                        autocomplete="off" name="{{$key}}" value="{{$it->Nama_Filter}}">
                                        <label class="btn btn-outline-primary"
                                        for="btncheck{{$it->id}}">{{$it->Nama_Filter}}</label>

                                        @endforeach
                                    </div>

                                    @elseif ($key=='created_at')
                                    <input type="hidden" name="{{$key}}" value="@php
                                    date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
                                    @endphp">
                                    @elseif ($key=='updated_at')
                                    <input type="hidden" name="{{$key}}" value="@php
                                    date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
                                    @endphp">
                                    @elseif ($key=='Deskripsi')
                                    <div class="col-md-12">
                                        <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group mb-3">
                                                    <textarea type="text" class="form-control"
                                                    placeholder="{{$key}}" name="{{$key}}"
                                                    aria-label="{{$key}}" aria-describedby="button-addon2"
                                                    rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-5">
                                        <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control"
                                                    placeholder="{{$key}}" name="{{$key}}"
                                                    aria-label="{{$key}}" aria-describedby="button-addon2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <?break;?>
            @endforeach
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
    </div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
@endsection

@section('modalTestimony')
<!-- Button trigger modal -->

<button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success"><i
    class="far fa-plus-square"> Tambah Data</i></button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @foreach ($data['testimonies'] as $key=>$item)
                    <form method="POST" action="add" class="">
                        @csrf
                        <input type="hidden" name="tabel" value="testimonies">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div id="holder">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Silahkan Input Testimonies</h5>
                                        <div class="mb-3">
                                            <div class="row">
                                                @foreach ($item as $key=>$itm)
                                                @if ($key=='id')
                                                @elseif ($key=="Gambar")
                                                <div class="col-md-12">
                                                    <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <div class="input-group mb-3">
                                                                <input id="thumbnail" class="img{{$item->id}} form-control"
                                                                type="text" placeholder="{{$key}}" name="{{$key}}"
                                                                aria-label="{{$key}}" aria-describedby="button-addon2">
                                                                <span class="input-group-btn">
                                                                    <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                                    class="btn btn-primary">
                                                                    <i class="fa fa-picture-o"></i> Choose
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
                                            @elseif ($key=='created_at')
                                            <input type="hidden" name="{{$key}}" value="@php
                                            date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
                                            @endphp">
                                            @elseif ($key=='updated_at')
                                            <input type="hidden" name="{{$key}}" value="@php
                                            date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
                                            @endphp">
                                            @elseif ($key=='Deskripsi')
                                            <div class="col-md-12">
                                                <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="input-group mb-3">
                                                            <textarea type="text" class="form-control"
                                                            placeholder="{{$key}}" name="{{$key}}"
                                                            aria-label="{{$key}}" aria-describedby="button-addon2"
                                                            rows="10"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            <div class="col-md-12">
                                                <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                            placeholder="{{$key}}" name="{{$key}}"
                                                            aria-label="{{$key}}" aria-describedby="button-addon2">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <?break;?>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
@endsection
@section('modalsetting')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New Developers
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($data['setting'] as $key=>$item)
                <form method="POST" action="add" class="">
                    <input type="hidden" name="tabel" value="setting">
                    @csrf
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div id="holder">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Silahkan Melakukan Input</h5>
                                    <div class="mb-3">
                                        <div class="row">
                                            @foreach ($item as $key=>$itm)
                                            @if (!($key=='id'))
                                            @if ($key=="Poster")
                                            <div class="col-md-12">
                                                <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="input-group mb-3">
                                                            <input id="thumbnail" class="img{{$item->id}} form-control"
                                                            type="text" placeholder="{{$key}}" name="{{$key}}"
                                                            aria-label="{{$key}}" aria-describedby="button-addon2">
                                                            <span class="input-group-btn">
                                                                <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                                class="btn btn-primary">
                                                                <i class="fa fa-picture-o"></i> Choose
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
                                        @elseif ($key=='Deskripsi')
                                        <div class="col-md-12">
                                            <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <textarea type="text" class="form-control"
                                                        placeholder="{{$key}}" name="{{$key}}"
                                                        aria-label="{{$key}}" aria-describedby="button-addon2"
                                                        rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @elseif ($key=='created_at')
                                        <input type="hidden" name="{{$key}}" value="@php
                                        date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
                                        @endphp">
                                        @elseif ($key=='updated_at')
                                        <input type="hidden" name="{{$key}}" value="@php
                                        date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
                                        @endphp">

                                        @else
                                        <div class="col-md-5">
                                            <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control"
                                                        placeholder="{{$key}}" name="{{$key}}"
                                                        aria-label="{{$key}}" aria-describedby="button-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <?break;?>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
@endsection


@section('modalService')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New Service
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($data['servides'] as $key=>$item)
                <form method="POST" action="add" class="">
                    <input type="hidden" name="tabel" value="servides">
                    @csrf
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div id="holder">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Silahkan Melakukan Input</h5>
                                    <div class="mb-3">
                                        <div class="row">
                                            @foreach ($item as $key=>$itm)
                                            @if (!($key=='id'))
                                            @if ($key=="Poster")
                                            <div class="col-md-12">
                                                <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="input-group mb-3">
                                                            <input id="thumbnail" class="img{{$item->id}} form-control"
                                                            type="text" placeholder="{{$key}}" name="{{$key}}"
                                                            aria-label="{{$key}}" aria-describedby="button-addon2">
                                                            <span class="input-group-btn">
                                                                <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                                class="btn btn-primary">
                                                                <i class="fa fa-picture-o"></i> Choose
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
                                        @elseif ($key=='Deskripsi')
                                        <div class="col-md-12">
                                            <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <textarea type="text" class="form-control"
                                                        placeholder="{{$key}}" name="{{$key}}"
                                                        aria-label="{{$key}}" aria-describedby="button-addon2"
                                                        rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @elseif ($key=='created_at')
                                        <input type="hidden" name="{{$key}}" value="@php
                                        date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
                                        @endphp">
                                        @elseif ($key=='updated_at')
                                        <input type="hidden" name="{{$key}}" value="@php
                                        date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
                                        @endphp">

                                        @else
                                        <div class="col-md-5">
                                            <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control"
                                                        placeholder="{{$key}}" name="{{$key}}"
                                                        aria-label="{{$key}}" aria-describedby="button-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <?break;?>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
@endsection

@section('modalAQ')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New QA
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($data['q_a_s'] as $key=>$item)
                <form method="POST" action="add" class="">
                    <input type="hidden" name="tabel" value="q_a_s">
                    @csrf
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div id="holder">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Silahkan Melakukan Input</h5>
                                    <div class="mb-3">
                                        <div class="row">
                                            @foreach ($item as $key=>$itm)
                                            @if (!($key=='id'))
                                            @if ($key=="Poster")
                                            <div class="col-md-12">
                                                <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="input-group mb-3">
                                                            <input id="thumbnail" class="img{{$item->id}} form-control"
                                                            type="text" placeholder="{{$key}}" name="{{$key}}"
                                                            aria-label="{{$key}}" aria-describedby="button-addon2">
                                                            <span class="input-group-btn">
                                                                <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                                class="btn btn-primary">
                                                                <i class="fa fa-picture-o"></i> Choose
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
                                        @elseif ($key=='Deskripsi')
                                        <div class="col-md-12">
                                            <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <textarea type="text" class="form-control"
                                                        placeholder="{{$key}}" name="{{$key}}"
                                                        aria-label="{{$key}}" aria-describedby="button-addon2"
                                                        rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @elseif ($key=='created_at')
                                        <input type="hidden" name="{{$key}}" value="@php
                                        date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
                                        @endphp">
                                        @elseif ($key=='updated_at')
                                        <input type="hidden" name="{{$key}}" value="@php
                                        date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
                                        @endphp">

                                        @else
                                        <div class="col-md-5">
                                            <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control"
                                                        placeholder="{{$key}}" name="{{$key}}"
                                                        aria-label="{{$key}}" aria-describedby="button-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <?break;?>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
@endsection

@section('modalmenu')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New Cliend
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($data['menu'] as $key=>$item)
                <form method="POST" action="add" class="">
                    <input type="hidden" name="tabel" value="menu">
                    @csrf
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div id="holder">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Silahkan Melakukan Input</h5>
                                    <div class="mb-3">
                                        <div class="row">
                                            @foreach ($item as $key=>$itm)
                                            @if (!($key=='id'))
                                            @if ($key=="Poster")
                                            <div class="col-md-12">
                                                <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="input-group mb-3">
                                                            <input id="thumbnail" class="img{{$item->id}} form-control"
                                                            type="text" placeholder="{{$key}}" name="{{$key}}"
                                                            aria-label="{{$key}}" aria-describedby="button-addon2">
                                                            <span class="input-group-btn">
                                                                <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                                class="btn btn-primary">
                                                                <i class="fa fa-picture-o"></i> Choose
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
                                        @elseif ($key=='Deskripsi')
                                        <div class="col-md-12">
                                            <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <textarea type="text" class="form-control"
                                                        placeholder="{{$key}}" name="{{$key}}"
                                                        aria-label="{{$key}}" aria-describedby="button-addon2"
                                                        rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @elseif ($key=='created_at')
                                        <input type="hidden" name="{{$key}}" value="@php
                                        date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
                                        @endphp">
                                        @elseif ($key=='updated_at')
                                        <input type="hidden" name="{{$key}}" value="@php
                                        date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
                                        @endphp">

                                        @else
                                        <div class="col-md-5">
                                            <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control"
                                                        placeholder="{{$key}}" name="{{$key}}"
                                                        aria-label="{{$key}}" aria-describedby="button-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <?break;?>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
@endsection

@section('modalcliend')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New Cliend
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($data['cliens'] as $key=>$item)
                <form method="POST" action="add" class="">
                    <input type="hidden" name="tabel" value="cliens">
                    @csrf
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div id="holder">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Silahkan Melakukan Input</h5>
                                    <div class="mb-3">
                                        <div class="row">
                                            @foreach ($item as $key=>$itm)
                                            @if (!($key=='id'))
                                            @if ($key=="Poster")
                                            <div class="col-md-12">
                                                <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="input-group mb-3">
                                                            <input id="thumbnail" class="img{{$item->id}} form-control"
                                                            type="text" placeholder="{{$key}}" name="{{$key}}"
                                                            aria-label="{{$key}}" aria-describedby="button-addon2">
                                                            <span class="input-group-btn">
                                                                <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                                class="btn btn-primary">
                                                                <i class="fa fa-picture-o"></i> Choose
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
                                        @elseif ($key=='Deskripsi')
                                        <div class="col-md-12">
                                            <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <textarea type="text" class="form-control"
                                                        placeholder="{{$key}}" name="{{$key}}"
                                                        aria-label="{{$key}}" aria-describedby="button-addon2"
                                                        rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @elseif ($key=='created_at')
                                        <input type="hidden" name="{{$key}}" value="@php
                                        date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
                                        @endphp">
                                        @elseif ($key=='updated_at')
                                        <input type="hidden" name="{{$key}}" value="@php
                                        date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
                                        @endphp">

                                        @else
                                        <div class="col-md-5">
                                            <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control"
                                                        placeholder="{{$key}}" name="{{$key}}"
                                                        aria-label="{{$key}}" aria-describedby="button-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <?break;?>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
@endsection

@section('modalcat')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New Filter
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($data['cat_project'] as $key=>$item)
                <form method="POST" action="add" class="">
                    <input type="hidden" name="tabel" value="cat_project">
                    @csrf
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div id="holder">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Silahkan Melakukan Input</h5>
                                    <div class="mb-3">
                                        <div class="row">
                                            @foreach ($item as $key=>$itm)
                                            @if (!($key=='id'))
                                            @if ($key=="Poster")
                                            <div class="col-md-12">
                                                <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="input-group mb-3">
                                                            <input id="thumbnail" class="img{{$item->id}} form-control"
                                                            type="text" placeholder="{{$key}}" name="{{$key}}"
                                                            aria-label="{{$key}}" aria-describedby="button-addon2">
                                                            <span class="input-group-btn">
                                                                <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                                class="btn btn-primary">
                                                                <i class="fa fa-picture-o"></i> Choose
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
                                        @elseif ($key=='Deskripsi')
                                        <div class="col-md-12">
                                            <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <textarea type="text" class="form-control"
                                                        placeholder="{{$key}}" name="{{$key}}"
                                                        aria-label="{{$key}}" aria-describedby="button-addon2"
                                                        rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @elseif ($key=='created_at')
                                        <input type="hidden" name="{{$key}}" value="@php
                                        date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
                                        @endphp">
                                        @elseif ($key=='updated_at')
                                        <input type="hidden" name="{{$key}}" value="@php
                                        date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
                                        @endphp">

                                        @else
                                        <div class="col-md-5">
                                            <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control"
                                                        placeholder="{{$key}}" name="{{$key}}"
                                                        aria-label="{{$key}}" aria-describedby="button-addon2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <?break;?>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
@endsection


@section('modalartikel')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New artikel
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($data['artikels'] as $key=>$item) 
                <form method="POST" action="add" class="">
                    <input type="hidden" name="tabel" value="artikels">
                    @csrf
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title">Silahkan Melakukan Input</h5>
                                    <div class="mb-3">
                                        <div class="row">
                                            @foreach ($item as $key=>$itm)
                                            @if (!($key=='id'))
                                            @if (($key=='id'))
                                            @elseif ($key=='ce')
                                            @include('admin.ck')
                                            @elseif ($key=='created_at')
                                            <input type="hidden" name="{{$key}}" value="@php
                                            date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
                                            @endphp">
                                            @elseif ($key=='updated_at')
                                            <input type="hidden" name="{{$key}}" value="@php
                                            date_default_timezone_set('Asia/Jakarta');echo date('Y-m-d H:i:s');
                                            @endphp">
                                            @else
                                            <div class="col-md-5">
                                                <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control"
                                                            placeholder="{{$key}}" name="{{$key}}"
                                                            aria-label="{{$key}}" aria-describedby="button-addon2">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <?break;?>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
@endsection
