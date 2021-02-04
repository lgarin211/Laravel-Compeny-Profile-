<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Company Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    {{-- here Custem CSS --}}
    <link rel="stylesheet" href="{{asset('custom/About')}}/style.css">
    <link rel="stylesheet" href="{{asset('custom/profile_card')}}/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"
        integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    {{-- end Custem --}}

    <!-- Favicons -->
    <link href="{{asset('Company')}}/assets/img/favicon.png" rel="icon">
    <link href="{{asset('Company')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('Company')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('Company')}}/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="{{asset('Company')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('Company')}}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{asset('Company')}}/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="{{asset('Company')}}/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('Company')}}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{asset('Company')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('Company')}}/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Company - v3.0.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="/"><span>Com</span>pany</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="/" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    @foreach (array_reverse($data['menu']) as $key=>$item)
                    @if ($key==0)
                    <li class="active"><a href="{{$item->link}}">{{$item->Name_Menu}}</a></li>
                    @else
                    <li class=""><a href="{{$item->link}}">{{$item->Name_Menu}}</a></li>
                    @endif
                    @endforeach
                </ul>
            </nav><!-- .nav-menu -->

            <div class="header-social-links">
                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
            </div>

        </div>
    </header><!-- End Header -->
