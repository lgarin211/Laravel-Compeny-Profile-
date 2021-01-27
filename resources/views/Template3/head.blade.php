<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Arsha Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assetsArsha')}}/img/favicon.png" rel="icon">
    <link href="{{asset('assetsArsha')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link href="{{asset('assetsArsha')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assetsArsha')}}/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="{{asset('assetsArsha')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('assetsArsha')}}/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{asset('assetsArsha')}}/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="{{asset('assetsArsha')}}/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('assetsArsha')}}/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assetsArsha')}}/css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0e70351f42.js" crossorigin="anonymous"></script>

    <!-- =======================================================
  * Template Name: Arsha - v3.0.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
                    @foreach ($data['menu'] as $key=>$item)
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
    @include('Template3.hero')
    <main id="main">