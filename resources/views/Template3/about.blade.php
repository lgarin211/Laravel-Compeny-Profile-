<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>About Us</h2>
        </div>

        <div class="row content">

            <div class="col-lg-6 ">
                <p>
                    {{$data['pasing']['text_about']}}
                </p>
                {{-- <a href="#" class="btn-learn-more">Learn More</a> --}}
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <p>
                    {{$data['pasing']['long_Slogan']}}
                </p>
                <ul>
                    @foreach ($data['pasing']['Kelebihan'] as $item)
                    <li>
                        <i class="ri-check-double-line"></i>
                        {{$item}}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->
