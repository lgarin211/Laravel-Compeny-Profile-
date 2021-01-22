@extends('admin.index')
@section('pasing')
<div class="container shodow-sm">
    @foreach ($data['developer'] as $item)
    <form method="POST" action="pas" class="">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <div id="holder" style="margin-top:15px;max-height:300px;">
                        <img src="{{$item->Poster}}" alt="{{$item->Poster}}" width="100%" height="300px">
                    </div>
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
                                                <input id="thumbnail" class="img{{$item->id}} form-control" type="text" placeholder="{{$key}}" name="{{$key}}" aria-label="{{$key}}" aria-describedby="button-addon2" value="{{$itm}}">
                                                <span class="input-group-btn">
                                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                </span>
                                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Button</button>
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
                                                @csrf
                                                <input type="hidden" name="tabel" value="developer">
                                                <input type="hidden" name="id" value="{{$item->id}}">
                                                <input type="text" class="form-control" placeholder="{{$key}}" name="{{$key}}" aria-label="{{$key}}" aria-describedby="button-addon2" value="{{$itm}}">
                                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Button</button>
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
