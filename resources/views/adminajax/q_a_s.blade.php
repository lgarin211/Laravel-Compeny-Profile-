
        @foreach ($data['q_a_s'] as $key=>$item)
        <div class="card">
            <div class="row text-center">
                <div class="Q col-md-6">
                    <h3>Q:</h3>
                    <p>{{$item->Q}}</p>
                </div>
                <div class="A col-md-6">
                    <h3>A:</h3>
                    <p>{{$item->A}}</p>
                </div>
            </div>
        </div>
        @endforeach

