<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Arsha Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('Template3.linkasset')
    @yield('alcall')
    {{-- loading here--}}
    <div id="preloader"></div>
</head>

<body>
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

            <a href="https://wa.me/{{$data['pasing']['Contak_Whatapps']}}?text=Hallo Customer Bonet Saya hendak bertanya Prihal ..."
                class="get-started-btn scrollto">Free Contak</a>

        </div>
    </header><!-- End Header -->


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1 class="logo me-auto text-center"><a href="/"><img src="{{$data['pasing']['LOGO']}}" alt=""
                                width="auto"></a></h1>
                    <h2>{{$data['pasing']['Simpel_Slogan']}}</h2>
                    {{-- <div class="d-lg-flex">
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video"
                        data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
                </div> --}}
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{$data['pasing']['Img_head']}}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
        <div class="container">

            <div class="justify-content-center row" data-aos="zoom-in">
                @foreach ($data['cliens'] as $item)

                <div class="card pr-1 pl-1 col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center ">
                    <img src="{{asset('').$item->Poster}}" class="img-fluid" alt="">
                </div>


                @endforeach

            </div>

        </div>
    </section><!-- End Cliens Section -->

    {{-- @include('Template3.whyus') --}}
    {{-- @include('Template3.skill') --}}
    @include('Custem.About.index')
    {{-- @dd($data)<!-- ======= Services Section ======= --> --}}
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Layanan Kami</h2>
                <p>DENGAN PENGALAMAN SEJAK TAHUN 1995, KAMI SENANTIASA TUMBUH DAN BERKEMBANG UNTUK MEMBERI MANFAAT</p>
            </div>

            <div class="row">
                @foreach ($data['servides'] as $item)
                <div class="col-xl-3 pb-3 col-md-6 d-flex align-items-stretch text-center" data-aos="zoom-in"
                    data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon">
                            <i class="{{$item->icon}}"></i>
                        </div>
                        <h4><a href="">{{$item->Title}}</a></h4>
                        <p>{{$item->Desc}}</p>
                    </div>
                </div>
                @endforeach
                {{--
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4><a href="">Sed ut perspici</a></h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                    <h4><a href="">Magni Dolores</a></h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                data-aos-delay="400">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-layer"></i></div>
                    <h4><a href="">Nemo Enim</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                </div>
            </div> --}}

            </div>

        </div>
    </section><!-- End Services Section -->

    {{-- @include('Template3.cta') --}}
    @include('Template3.team')
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
                {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>
            <ul id="portfolio-flters" class="container  row d-flex justify-content-center text-center"
                data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active col-sm-4">All</li>
                @foreach ($data['cat_project'] as $item)
                <li data-filter=".{{$item->Nama_Filter}}" class="col-md-4">{{$item->Nama_Filter}}</li>
                @endforeach
            </ul>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($data['project'] as $item)
                <div class="col-lg-4 col-md-6 portfolio-item @foreach ($item->filter as $it)
                {{$it.' '}}
            @endforeach">
                    <div class="portfolio-img"><img src="{{asset('').$item->Img}}" class="img-fluid" alt="">
                    </div>
                    <div class="portfolio-info">
                        <h4>{{$item->Name_Project}}</h4>
                        <p>{{$item->Pemesan}}</p>
                        <p>@foreach ($item->filter as $it)
                            {{$it.' '}}
                            @endforeach</p>
                        <a href="{{asset('').$item->Img}}" data-gall="portfolioGallery" class="venobox preview-link"
                            title="{{$item->Name_Project}}"><i class="bx bx-plus"></i></a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#project{{$item->id}}" class="details-link"
                            title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>@endforeach


            </div>

        </div>
    </section><!-- End Portfolio Section -->

    {{-- @include('Template3.pricing') --}}
    {{-- @include('Template3.frekuenly') --}}
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Kontak</h2>
                <p>{{ $data['pasing']['text_contak'] }}</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex palign-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Alamat:</h4>
                            <p>{{$data['pasing']['Alamat']}}</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>{{$data['pasing']['Email']}}</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Kontak:</h4>
                            <p>{{$data['pasing']['Contak_Whatapps']}}</p>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb={{$data['pasing']['Maps']}}" frameborder="0"
                            style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Namamu</label>
                                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4"
                                    data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Alamat Emailmu</label>
                                <input type="email" class="form-control" name="email" id="email" data-rule="email"
                                    data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Pembuka</label>
                            <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4"
                                data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <label for="name">Pesan</label>
                            <textarea class="form-control" name="message" rows="10" data-rule="required"
                                data-msg="Please write something for us"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">

        {{-- <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4>Join Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h2 class="logo me-auto"><a href="/"><img src="{{$data['pasing']['LOGO']}}" alt=""
                                    width="auto"></a>
                        </h2>
                        <p>
                            <strong>Alamat:</strong>{{$data['pasing']['Alamat']}}<br>
                            <strong>Phone:</strong>{{$data['pasing']['Contak_Whatapps']}}<br>
                            <strong>Email:</strong>{{$data['pasing']['Email']}}<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            @foreach ($data['menu'] as $item)
                            <li><i class="bx bx-chevron-right"></i> <a href="{{$item->link}}">{{$item->Name_Menu}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Layanan Kami</h4>
                        <ul>
                            @foreach ($data['servides'] as $item)
                            <li><i class="{{$item->icon}}"></i> <a href="#">{{$item->Title}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Sosial Media Kami</h4>
                        <p>Kamu Juga Bisa Folow sosial Media kami di</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>{{$data['pasing']['URL']}}</span></strong>. </div>
            <div class="credits">
            </div>
        </div>
    </footer>

    <!-- End Footer --> @foreach ($data['developer'] as $item)

    {{-- here --}}
    <!-- Modal{{$item->Name_Developer}} -->
    <div class="text-center modal fade" id="exampleModal{{$item->id}}" tabindex="-1"
        aria-labelledby="exampleModalLabel{{$item->id}}" aria-hidden="true">
        <div class="modal-dialog">
            {{-- <div class="modal-content"> --}}
            <div class="profile-cardmodal">
                <div class="card-headeras">
                    <div class="pics">
                        <img src="{{asset('').$item->Poster}}" alt="">
                    </div>
                    <div class="namemodal">{{$item->Name_Developer}}</div>
                    <div class="desc">{{$item->Bidang}}</div>
                </div>
                <div class="card-footermodal">
                    {{$item->Deskripsi}}
                </div>
            </div>
        </div>
    </div>
    {{-- post --}}
    @endforeach
    @include('Template3.modal')
    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
        integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
        crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
        loop:true,
        center: true,
        items:1,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
            // margin:10,
            // autoWidth:true,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                // 100:{
                //     items:2
                // },

            }
        })
    </script>


    <!-- Vendor JS Files -->
    <script src="{{asset('assetsArsha')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('assetsArsha')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assetsArsha')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{asset('assetsArsha')}}/vendor/php-email-form/validate.js"></script>
    <script src="{{asset('assetsArsha')}}/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{asset('assetsArsha')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{asset('assetsArsha')}}/vendor/venobox/venobox.min.js"></script>
    <script src="{{asset('assetsArsha')}}/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{asset('assetsArsha')}}/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assetsArsha')}}/js/main.js"></script>

</body>

</html>
