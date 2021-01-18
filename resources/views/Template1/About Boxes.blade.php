
<section class="about pb-0 overflow-visible" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pr-5 mb-5 mb-lg-0 wow fadeInLeft">
                <div class="rare-box"></div>
                <img src="https://megaone.acrothemes.com/creative-studio/img/about.jpg"
                    class="about-img-small position-relative w-100" alt="">
            </div>
            <div class="col-lg-6 pl-6">
                <div class="main-title text-lg-left offset-md-1 mb-0 wow fadeInUp" data-wow-delay="300ms">
                    <h5 class="wow fadeInUp" data-wow-delay="300ms"> {{$data['pasing']['Nama_perusahaan']}}</h5>
                    <h2 class="wow fadeInUp font-weight-light" data-wow-delay="400ms"> Kami Hadir <span
                            class="color-pink">Membantu </span> Anda</h2>
                    <p class="pb-4 wow fadeInUp" data-wow-delay="500ms">{{$data['pasing']['text_about']}}</p>

                    <ul class="pb-5 text-left wow fadeInUp" data-wow-delay="600ms">
                        @foreach ($data['pasing']['Kelebihan'] as $das)
                        <li>{{$das}}.</li>
                        @endforeach
                    </ul>

                    {{-- <a href="https://megaone.acrothemes.com/javascript:void(0)"
                        class="btn-setting color-black btn-hvr-up btn-yellow btn-hvr-pink text-white link wow fadeInUp"
                        data-wow-delay="700ms">learn more</a> --}}
                </div>
            </div>
        </div>
    </div>
</section>

