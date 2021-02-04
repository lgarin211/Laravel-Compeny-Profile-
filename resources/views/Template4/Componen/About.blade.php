@section('breadcrumbs')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>About</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>About</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
@endsection


@section('team')
<!-- ======= Our Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Our <strong>Team</strong></h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
            {{--    loop here --}}
            @foreach ($data['developer'] as $item)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up">
                    <div class="member-img">
                        <img src="{{asset('').$item->Poster}}" class="img-fluid" alt="{{$item->Name_Developer}}">
                        <div class="social">
                            <a href=""><i class="icofont-twitter"></i></a>
                            <a href=""><i class="icofont-facebook"></i></a>
                            <a href=""><i class="icofont-instagram"></i></a>
                            <a href=""><i class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>{{$item->Name_Developer}}</h4>
                        <span>{{$item->Bidang}}</span>
                        <p>
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}"
                                class="btn-get-started">
                                Lebih Lanjut
                            </button>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- end loop --}}

        </div>

    </div>
</section><!-- End Our Team Section -->
@endsection

@section('Clients')
<!-- ======= Our Clients Section ======= -->
<section id="clients" class="clients">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Clients</h2>
        </div>
        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

            {{-- loop here --}}
            @foreach ($data['cliens'] as $item)
            <div class="col-lg-3 col-md-4 col-6">
                <div class="client-logo">
                    <img src="{{asset('').$item->Poster}}" class="img-fluid" z` z` alt="{{$item->Name}}">
                </div>
            </div>
            @endforeach
            {{-- end loop --}}

        </div>

    </div>
</section><!-- End Our Clients Section -->
@endsection
