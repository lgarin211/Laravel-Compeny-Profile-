</main><!-- End #main -->
<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-newsletter">
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
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h2 class="logo me-auto"><a href="/"><img src="{{$data['pasing']['LOGO']}}" alt="" width="auto"></a>
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
                        <li><i class="bx bx-chevron-right"></i> <a href="{{$item->link}}">{{$item->Name_Menu}}</a></li>
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
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<div id="preloader"></div>

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
