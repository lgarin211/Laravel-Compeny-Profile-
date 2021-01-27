<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Tentang Kami</h2>
        </div>

        <div class="row text-center">
            <div class="col-lg-12" id="man" >
                <p>
                    {{$data['pasing']['text_about']}}
                </p>
                {{-- <a href="#" class="btn-learn-more">Learn More</a> --}}
            </div>
            <div class="col-lg-12 pt-4 pt-lg-0" id="men">
                <p>
                    {{$data['pasing']['long_Slogan']}}
                </p>
                <ul class="text-center row" style="list-style-type: none;">
                    @foreach ($data['pasing']['Kelebihan'] as $item)
                    <li class="col-md-4">
                        <p class="row">
                            <i class="fab fa-affiliatetheme"></i>
                            <samp class=""> {{$item}}</samp>
                        </p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>

    <script>
       var man= document.getElementById('man').innerHTML
        var men=document.getElementById('men').innerHTML
        document.getElementById('men').innerHTML=''
        i=0
        setInterval(() => {
            if (i==0) {
                console.log(i);
                document.getElementById('man').innerHTML=man
i=1
            }
            else {
                document.getElementById('man').innerHTML=men
                console.log(i);
i=0
            }

        }, 8000);
    </script>

</section><!-- End About Us Section -->
