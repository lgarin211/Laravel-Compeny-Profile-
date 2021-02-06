<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner" role="listbox">
            @foreach ($data['sliders'] as $key=>$item)
            <!-- Slide {{$key}} -->
            <div class="carousel-item @if ($key==0){{'active'}}@endif" style="background-image: url('{{asset(''.$item->Poster)}}');">
                <div class="carousel-container">
                    <div class="carousel-content animate__animated animate__fadeInUp">
                        <h2><span>{{$item->Title}}</span></h2>
                        <p>{{$item->Deskripsi}}.</p>
                        <div class="text-center"><a href="/about" class="btn-get-started">Read More</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
</section><!-- End Hero -->
