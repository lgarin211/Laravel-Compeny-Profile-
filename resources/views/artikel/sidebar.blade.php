<!-- Sidebar Widgets Column -->
<div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-append">
                    <button class="btn btn-secondary" type="button">Go!</button>
                </span>
            </div>
        </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-unstyled mb-0 row">
                        @foreach ($data['cat_artikels'] as $item)
                        <li class="col-md-10">
                            <a href="/artikel?w={{$item->Link_Filter}}">{{$item->Nama_Filter}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
        <h5 class="card-header">Disanankan Untuk Anda</h5>
        <div class="card-body">
            <ul class="row">
                @foreach ($data['sartikels'] as $item)
                <a href="{{'/artikel/pag?w='.$item->id}}">
                    <p>{{$item->title}}</p>
                </a>
                @endforeach
            </ul>
        </div>
    </div>
