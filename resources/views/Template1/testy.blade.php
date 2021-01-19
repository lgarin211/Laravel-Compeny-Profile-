<!-- Clients start -->
<section id="clients" class="bg-white p-0 cursor-light no-transition">
    <h2 class="d-none">heading</h2>
    <div class="section-padding parallax-setting parallaxie parallax2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title wow fadeIn" data-wow-delay="300ms">
                        <!-- <h5> Lorem ipsum dolor sit amet </h5> -->
                        <h2 class="mb-0">Bekerja Sama Dengan<span class="color-pink"> Berbagai Perusahaan</span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="testimonial-images">
                <div class="owl-thumbs owl-dots d-lg-block d-none">
                    @foreach ($data['testimonies'] as $key=>$item)
                    @if($key==1)
                    <div class="owl-dot animated-wrap active"><img src="{{$item->Gambar}}" alt=""
                            class="animated-element"></div>
                    @else
                    <div class="owl-dot animated-wrap"><img src="{{$item->Gambar}}" alt="" class="animated-element">
                    </div>
                    @endif
                    @endforeach


                </div>
            </div>

            <div class="row align-items-center position-relative">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme testimonial-two hide-cursor mx-auto wow zoomIn"
                        data-wow-delay="400ms">
                        @foreach ($data['testimonies'] as $key=>$item)
                        <div class="testimonial-item">
                            <p class="color-black testimonial-para mb-15px"> . </p>
                            <div class="testimonial-post">
                                <a href="https://megaone.acrothemes.com/javascript:void(0)" class="post"><img
                                        src="{{$item->Gambar}}" alt="image"></a>
                                <div class="text-content">
                                    <h5 class="color-black text-capitalize">{{$item->Nama}}</h5>
                                    <p class="color-grey"> {{$item->Deskripsi}}</p>
                                    {{-- <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Clients ends -->
