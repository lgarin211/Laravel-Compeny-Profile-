{{-- @dd($data); --}}
{{-- here --}}
@foreach ($data['project'] as $item)
<!-- Modal{{$item->Name_Project}} -->
<div class="text-center modal fade" id="{{$item->id}}" tabindex="-1"
    aria-labelledby="exampleModalLabel{{$item->id}}" aria-hidden="true">
    <div class="modal-dialog">
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="portfolio-details-container">
                    <div class="owl-carousel portfolio-details-carousel">
                        <img src="{{asset('').$item->Img}}" class="img-fluid" alt="">
                    </div>
                    <div class="portfolio-info">
                        <h3>Informasi Project</h3>
                        <ul>
                            <li><strong>Jenis</strong>:@foreach ($item->filter as $it){{$it.' '}}@endforeach</li>
                            <li><strong>Pemesan</strong>: {{$item->Pemesan}}</li>
                            <li><strong>Project date</strong>: {{$item->created_at}}</li>
                            <li><strong>Project URL</strong>: <a href="{{$item->link}}">{{$item->link}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="portfolio-description">
                    <h2>{{$item->Name_Project}}</h2>
                    <p>{{$item->Deskripsi}}
                    </p>
                </div>
            </div>
        </section><!-- End Portfolio Details Section -->
    </div>
</div>
@endforeach
