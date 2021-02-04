<div class="col-md-8">
    <article class="entry entry-single" data-aos="fade-up">

        <div class="entry-img">
            <img src="{{asset('').$data['item']->poster}}" alt="" class="img-fluid">
        </div>

        <h2 class="entry-title">
            <a href="#">{{$data['item']->title}}</a>
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
                <?=$data['item']->ce?>
            </p>

        </div>

        <div class="entry-footer clearfix">
            <div class="float-left">
                <i class="icofont-folder"></i>
                <ul class="cats">
                    <li><a href="/artikel?w={{$data['item']->cat}}">{{$data['item']->cat}}</a></li>
                </ul>
            </div>

            <div class="float-right share">
                <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
            </div>

        </div>

    </article><!-- End blog entry -->
</div>
