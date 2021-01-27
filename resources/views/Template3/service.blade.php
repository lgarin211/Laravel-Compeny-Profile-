{{-- @dd($data)<!-- ======= Services Section ======= --> --}}
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Layanan Kami</h2>
            <p>DENGAN PENGALAMAN SEJAK TAHUN 1995, KAMI SENANTIASA TUMBUH DAN BERKEMBANG UNTUK MEMBERI MANFAAT</p>
        </div>

        <div class="row">
            @foreach ($data['servides'] as $item)
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
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
