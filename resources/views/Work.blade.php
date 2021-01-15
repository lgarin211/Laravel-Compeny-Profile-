
<section id="work" class="pb-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <h5> Lorem ipsum dolor sit amet </h5>
                    <h2 class="mb-0">Creative<span class="color-pink"> Portfolio</span> </h2>
                </div>
            </div>
        </div>
        <div class="row d-block">

            <div id="js-filters-mosaic-flat" class="cbp-l-filters-alignCenter">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item cbp-filter-style">
                    All <div class="cbp-filter-counter"></div>
                </div>
                @foreach ($data['cat_project'] as $item)
                <div data-filter="{{'.'.$item->Nama_Filter}}" class="cbp-filter-item cbp-filter-style">
                    {{$item->Nama_Filter}}
                    <div class="cbp-filter-counter"></div>
                </div>
                @endforeach

            </div>

            <div id="js-grid-mosaic-flat" class="cbp cbp-l-grid-mosaic-flat no-transition">
                @foreach ($data['project'] as $item)
                <div class="cbp-item @foreach ($item->filter as $is){{$is.' '}}@endforeach">
                    <a href="{{$item->link}}" class="cbp-caption cbp-lightbox" data-title="Bolt UI<br>by Tiberiu Neamu">
                        <div class="cbp-caption-defaultWrap">
                            <img src="{{$item->Img}}" alt="work">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <p>{{$item->Name_Project}}</p>
                                    <div class="cbp-l-caption-title">{{$item->Pemesan}}</div>
                                    <span class="work-icon">
                                        <i class="fa fa-arrow-right"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

