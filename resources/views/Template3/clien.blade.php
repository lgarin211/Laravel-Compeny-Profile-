<!-- ======= Cliens Section ======= -->
<section id="cliens" class="cliens section-bg">
    <div class="container">

        <div class="justify-content-center row" data-aos="zoom-in">
            @foreach ($data['cliens'] as $item)

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{$item->Poster}}" class="img-fluid" alt="">
            </div>

            @endforeach

        </div>

    </div>
</section><!-- End Cliens Section -->
