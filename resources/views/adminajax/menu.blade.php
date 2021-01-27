
        @foreach ($data['menu'] as $key=>$item)
        <div class="card">
            <div class="row text-center">
                <div class="Q col-md-6 row">
                    <h4>Menu :</h4>
                    <small>{{$item->Name_Menu}}</small>
                </div>
                <div class="A col-md-6 row">
                    <h4>link :</h4>
                    <small><a href="{{ asset('') }}/{{$item->link}}">{{ asset('') }}/{{$item->link}}</a></small>
                </div>
            </div>
        </div>
        @endforeach
