<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 footer-contact">
                    <h3></h3>
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

                {{-- <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Join Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div> --}}

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>Company</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->
@foreach ($data['developer'] as $item)

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



<!-- Vendor JS Files -->
<script src="{{asset('Company')}}/assets/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('Company')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('Company')}}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="{{asset('Company')}}/assets/vendor/php-email-form/validate.js"></script>
<script src="{{asset('Company')}}/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="{{asset('Company')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('Company')}}/assets/vendor/venobox/venobox.min.js"></script>
<script src="{{asset('Company')}}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="{{asset('Company')}}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="{{asset('Company')}}/assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('Company')}}/assets/js/main.js"></script>
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

          }
      })
</script>
</body>

</html>
