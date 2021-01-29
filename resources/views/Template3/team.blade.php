<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Team</h2>
            {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <div class="row">
            @foreach ($data['developer'] as $item)
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                    <div class="pic"><img src="{{$item->Poster}}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>{{$item->Name_Developer}}</h4>
                        <span>{{$item->Bidang}}</span>
                        <p><a href="/dev?id={{$item->id}}" class="btn btn-ungu">Lebih Lanjut</a></p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

    </div>
</section><!-- End Team Section -->
