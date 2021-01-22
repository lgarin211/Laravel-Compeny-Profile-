<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <h5> Tim Kami Terdiri Dari Banyak Orang Yang Berperan Aktif </h5>
                    <h2 class="mb-0"><span class="color-pink">Developer</span> Team </h2>
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp team" data-wow-delay="300">
            @foreach ($data['developer'] as $item)
            <div class="col-xl-3 p-0 team-col mx-auto">
                <div class="team-image">
                    <img src="{{$item->Poster}}" alt="team1" class="m-image1">
                </div>
                <div class="team-classic-content hvr-team pink">
                    <h5 class="mb-3 text-capitalize color-black">{{$item->Name_Developer}}</h5>
                    <h6 class="mb-3 text-capitalize color-pink">{{$item->Bidang}}</h6>
                    <p class="mt-3 mb-3 color-black">{{$item->Deskripsi}}.</p>
                    <ul class="team-social">
                        <li class="d-inline-block">
                            <a href="https://megaone.acrothemes.com/javascript:void(0)" class="facebook-bg-hvr">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="https://megaone.acrothemes.com/javascript:void(0)" class="twitter-bg-hvr"><i
                                    class="fab fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="d-inline-block">
                            <a href="https://megaone.acrothemes.com/javascript:void(0)" class="google-bg-hvr"><i
                                    class="fab fa-google" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
</section>
