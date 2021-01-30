    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="/"><img src="{{$data['pasing']['LOGO']}}" alt="" width="auto"></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <? ?>
                    @foreach (array_reverse($data['menu']) as $key=>$item)
                    @if ($key==0)
                    <li class="active"><a href="{{$item->link}}">{{$item->Name_Menu}}</a></li>
                    @else
                    <li class=""><a href="{{$item->link}}">{{$item->Name_Menu}}</a></li>
                    @endif
                    @endforeach

                </ul>
            </nav><!-- .nav-menu -->

            <a href="https://wa.me/{{$data['pasing']['Contak_Whatapps']}}?text=Hallo Customer Bonet Saya hendak bertanya Prihal ..." class="get-started-btn scrollto">Free Contak</a>

        </div>
    </header><!-- End Header -->
