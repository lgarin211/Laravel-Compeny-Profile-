
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Portfolio</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            @foreach ($data['cat_project'] as $item)

            <li data-filter=".{{$item->Nama_Filter}}">{{$item->Nama_Filter}}</li>
             @endforeach


        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($data['project'] as $item)
            <div class="col-lg-4 col-md-6 portfolio-item @foreach ($item->filter as $it)
                {{$it.' '}}
            @endforeach">
                <div class="portfolio-img"><img src="{{$item->Img}}" class="img-fluid" alt="">
                </div>
                <div class="portfolio-info">
                    <h4>{{$item->Name_Project}}</h4>
                    <p>{{$item->Pemesan}}</p>
                    <p>{{$item->Deskripsi}}</p>
                    <a href="{{$item->Img}}" data-gall="portfolioGallery" class="venobox preview-link"
                        title="{{$item->Name_Project}}"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>@endforeach


        </div>

    </div>
</section><!-- End Portfolio Section -->
