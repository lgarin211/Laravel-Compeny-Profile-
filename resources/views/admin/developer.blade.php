{{-- @dd($data); --}}
@extends('admin.index')
@section('pasing')
@if ( session('cas'))
<div class="alert alert-success">
    {{ session('cas') }}
</div>

@endif
<div class="container shodow-sm">
    @foreach ($data['developer'] as $item)
    <form method="POST" action="pas" class="">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{$item->Poster}}" class="gimg{{$item->id}}" alt="{{$item->Poster}}" width="100%"
                        height="300px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->Name_Developer}}</h5>
                        <div class="mb-3">
                            <div class="row">
                                @foreach ($item as $key=>$itm)
                                @if ($key=="Poster")
                                <div class="col-md-12">
                                    <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="input-group mb-3">
                                                @csrf
                                                <input type="hidden" name="tabel" value="developer">
                                                <input type="hidden" name="id" value="{{$item->id}}">
                                                {{-- <input type="text" class="form-control"> --}}
                                                <input id="thumbnail" class="img{{$item->id}} form-control" type="text"
                                                    placeholder="{{$key}}" name="{{$key}}" aria-label="{{$key}}"
                                                    aria-describedby="button-addon2" value="{{$itm}}">
                                                <span class="input-group-btn">
                                                    <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                        class="btn btn-primary">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                </span>
                                                <button class="btn btn-outline-secondary" type="submit"
                                                    id="button-addon2">Button</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
                                @else
                                <div class="col-md-5">
                                    <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group mb-3">
                                                @csrf
                                                <input type="hidden" name="tabel" value="developer">
                                                <input type="hidden" name="id" value="{{$item->id}}">
                                                <input type="text" class="form-control" placeholder="{{$key}}"
                                                    name="{{$key}}" aria-label="{{$key}}"
                                                    aria-describedby="button-addon2" value="{{$itm}}">
                                                <button class="btn btn-outline-secondary" type="submit"
                                                    id="button-addon2">Button</button>
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
    </form>
    <br>
    @endforeach
</div>
@endsection
@section('modal')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add
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
                @if ($key==1)
                <?break?>
                @endif
                <form method="POST" action="pas" class="">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="" class="gimg{{$item->id}}" alt="" width="100%" height="300px">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{$item->Name_Developer}}</h5>
                                    <div class="mb-3">
                                        <div class="row">
                                            @foreach ($item as $key=>$itm)
                                            @if ($key=="Poster")
                                            <div class="col-md-12">
                                                <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="input-group mb-3">
                                                            @csrf
                                                            <input type="hidden" name="tabel" value="developer">
                                                            <input type="hidden" name="id">
                                                            {{-- <input type="text" class="form-control"> --}}
                                                            <input id="thumbnail" class="img{{$item->id}} form-control"
                                                                type="text" placeholder="{{$key}}" name="{{$key}}"
                                                                aria-label="{{$key}}" aria-describedby="button-addon2">
                                                            <span class="input-group-btn">
                                                                <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                                    class="btn btn-primary">
                                                                    <i class="fa fa-picture-o"></i> Choose
                                                                </a>
                                                            </span>
                                                            <button class="btn btn-outline-secondary" type="submit"
                                                                id="button-addon2">Button</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
                                            @else
                                            <div class="col-md-5">
                                                <label for="{{'idis'.$key}}" class="form-label">{{$key}}</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="input-group mb-3">
                                                            @csrf
                                                            <input type="hidden" name="tabel" value="developer">
                                                            <input type="text" class="form-control"
                                                                placeholder="{{$key}}" name="{{$key}}"
                                                                aria-label="{{$key}}" aria-describedby="button-addon2">
                                                            <button class="btn btn-outline-secondary" type="submit"
                                                                id="button-addon2">Button</button>
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
                </form>
                <br>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


@endsection
