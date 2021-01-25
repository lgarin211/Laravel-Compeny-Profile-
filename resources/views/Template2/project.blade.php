<!-- One -->
<section id="one" class="tiles">
    @foreach ($data['project'] as $item)
    <article>
        <span class="image">
            <img src="{{$item->Img}}" alt="" />
        </span>
        <header class="major">
            <h3><a href="landing.html" class="link">{{$item->Name_Project}}</a></h3>
            <p><small><sub>form</sub></small>{{$item->Pemesan}}</p>
        </header>
    </article>
    @endforeach
</section>
