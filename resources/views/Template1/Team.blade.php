{{-- @dd($data) --}}
{{-- @extends('compeny') --}}
{{-- @section('Team') --}}
<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <h5> Lorem ipsum dolor sit amet </h5>
                    <h2 class="mb-0">Info <span class="color-pink">Developer</span> Team </h2>
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp team" data-wow-delay="300">
            @foreach ($data['developer'] as $key=>$pas)
            @if ($key%2==0)
            <div class="col-lg-6 col-xl-3 p-0 team-col ml-md-auto mr-md-0 mx-auto">
                <div class="team-image">
                    <img src="{{ $pas->Poster }}" alt="{{ $pas->Poster }}" class="m-image1" style="width: 250px; height: 250px;">
                </div>
                <div class="team-classic-content hvr-team pink">
                    <h3 class="mb-3 text-capitalize color-black">{{$pas->Name_Developer  }}</h3>
                    <h5 class="mb-3 text-capitalize color-pink">{{ $pas->Bidang }}</h5>
                    <p class="mt-3 mb-3 color-black">{{ $pas->Deskripsi }}.
                    </p>
                    <ul class="team-social">
                        <li class="d-inline-block"><a href="https://megaone.acrothemes.com/javascript:void(0)"
                                class="facebook-bg-hvr"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        </li>
                        <li class="d-inline-block"><a href="https://megaone.acrothemes.com/javascript:void(0)"
                                class="twitter-bg-hvr"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="d-inline-block"><a href="https://megaone.acrothemes.com/javascript:void(0)"
                                class="google-bg-hvr"><i class="fab fa-google" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            {{-- expr --}}
            @endif
            @if ($key%2==1)
            <div class="col-lg-6 col-xl-3 p-0 team-col2 mr-md-auto ml-md-0 mx-auto">
                <div class="row">
                    <div class="col-md-12 order-md-1">
                        <div class="team-image">
                        <img src="{{ $pas->Poster }}" alt="{{ $pas->Poster }}" class="m-image2">
                        </div>
                    </div>
                    <div class="col-md-12 order-md-0">
                        <div class="team-classic-content hvr-team2 blue">
                            <h3 class="mb-3 text-capitalize color-black">{{$pas->Name_Developer  }}</h3>
                            <h5 class="mb-3 text-capitalize color-blue">marketing head</h5>
                            <p class="mt-3 mb-3 color-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                augue.</p>
                            <ul class="team-social">
                                <li class="d-inline-block"><a href="https://megaone.acrothemes.com/javascript:void(0)"
                                        class="facebook-bg-hvr"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                </li>
                                <li class="d-inline-block"><a href="https://megaone.acrothemes.com/javascript:void(0)"
                                        class="twitter-bg-hvr"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li class="d-inline-block"><a href="https://megaone.acrothemes.com/javascript:void(0)"
                                        class="google-bg-hvr"><i class="fab fa-google" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-100 d-none d-lg-block d-xl-none"></div>
            @endif
        </div>
        @endforeach
    </div>
</section>
{{-- @endsection --}}







{{-- @dd($data) --}}
{{-- @extends('compeny') --}}


