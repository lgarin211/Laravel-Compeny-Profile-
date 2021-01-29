<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Kontak</h2>
            <p>{{ $data['pasing']['text_contak'] }}</p>
        </div>

        <div class="row">

            <div class="col-lg-5 d-flex palign-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="icofont-google-map"></i>
                        <h4>Alamat:</h4>
                        <p>{{$data['pasing']['Alamat']}}</p>
                    </div>

                    <div class="email">
                        <i class="icofont-envelope"></i>
                        <h4>Email:</h4>
                        <p>{{$data['pasing']['Email']}}</p>
                    </div>

                    <div class="phone">
                        <i class="icofont-phone"></i>
                        <h4>Kontak:</h4>
                        <p>{{$data['pasing']['Contak_Whatapps']}}</p>
                    </div>

                    <iframe
                        src="https://www.google.com/maps/embed?pb={{$data['pasing']['Maps']}}"
                        frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Namamu</label>
                            <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4"
                                data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Alamat Emailmu</label>
                            <input type="email" class="form-control" name="email" id="email" data-rule="email"
                                data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Pembuka</label>
                        <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4"
                            data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <label for="name">Pesan</label>
                        <textarea class="form-control" name="message" rows="10" data-rule="required"
                            data-msg="Please write something for us"></textarea>
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
