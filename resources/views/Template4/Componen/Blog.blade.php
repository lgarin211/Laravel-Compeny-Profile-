@section('breadcrumbs')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Blog</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Blog</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
@endsection

@section('containerart')
<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container">

        <div class="row">
            @section('allart')
            <div class="col-lg-8 entries">
                @foreach ($data['artikels'] as $item)
                <article class="entry" data-aos="fade-up">

                    <div class="entry-img">
                        <img src="{{asset('').$item->poster}}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        <a href="/artikel/pag?e={{$item->id}}">{{$item->title}}</a>
                    </h2>

                    {{-- <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                    href="blog-single.html">John Doe</a></li>
                            <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                    href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                            <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a
                                    href="blog-single.html">12 Comments</a></li>
                        </ul>
                    </div> --}}

                    <div class="entry-content">
                        <p>
                            {{$item->headline}}
                        </p>
                        <div class="read-more">
                            <a href="/artikel/pag?e={{$item->id}}">Baca</a>
                        </div>
                    </div>

                </article><!-- End blog entry -->
                @endforeach

            </div><!-- End blog entries list -->
            @endsection

            @if (!empty($_GET['e']))
            @include('artikel.onepost')
            @else
            @yield('allart')
            @endif
            @section('siteart')
            <div class="col-lg-4">
                <div class="sidebar" data-aos="fade-left">

                    <h3 class="sidebar-title">Search</h3>
                    <div class="sidebar-item search-form">
                        <form action="">
                            <input type="text">
                            <button type="submit"><i class="icofont-search"></i></button>
                        </form>

                    </div><!-- End sidebar search formn-->

                    <h3 class="sidebar-title">Categories</h3>
                    <div class="sidebar-item categories">
                        <ul>
                            @foreach ($data['cat_artikels'] as $item)
                            <li><a href="/artikel?w={{$item->Link_Filter}}">{{$item->Nama_Filter}}</a></li>
                            @endforeach
                        </ul>

                    </div><!-- End sidebar categories-->

                    <h3 class="sidebar-title">Recent Posts</h3>
                    <div class="sidebar-item recent-posts">
                        @foreach ($data['sartikels'] as $item)
                        <div class="post-item clearfix">
                            <img src="{{asset('').$item->poster}}" alt="">
                            <h4><a href="{{'/artikel/pag?e='.$item->id}}">{{$item->title}}</a></h4>
                            {{-- <time datetime="2020-01-01">Jan 1, 2020</time> --}}
                        </div>
                        @endforeach

                    </div><!-- End sidebar recent posts-->

                    <h3 class="sidebar-title">Tags</h3>
                    <div class="sidebar-item tags">
                        <ul>
                            <li><a href="#">App</a></li>
                            <li><a href="#">IT</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Mac</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Office</a></li>
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Studio</a></li>
                            <li><a href="#">Smart</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Marketing</a></li>
                        </ul>

                    </div><!-- End sidebar tags-->

                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->
            @endsection
            @yield('siteart')
        </div>

    </div>
</section><!-- End Blog Section -->
@endsection
