<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Contact</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Contact</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<div class="map-section">
    <iframe style="border:0; width: 100%; height: 350px;"
        src="https://www.google.com/maps/embed?pb={{$data['pasing']['Maps']}}"
        frameborder="0" allowfullscreen></iframe>
</div>

<section id="contact" class="contact">
    <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

            <div class="col-lg-10">

                <div class="info-wrap">
                    <div class="row">
                        <div class="col-lg-4 info">
                            <i class="icofont-google-map"></i>
                            <h4>Alamat :</h4>
                            <p>{{$data['pasing']['Alamat']}}</p>
                        </div>

                        <div class="col-lg-4 info mt-4 mt-lg-0">
                            <i class="icofont-envelope"></i>
                            <h4>Email :</h4>
                            <p>{{$data['pasing']['Email']}}</p>
                        </div>

                        <div class="col-lg-4 info mt-4 mt-lg-0">
                            <i class="icofont-phone"></i>
                            <h4>Call :</h4>
                            <p>{{$data['pasing']['Contak_Whatapps']}}</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
            <div class="col-lg-10">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                            data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
