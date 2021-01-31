@include('Template3.head')
@include('Template3.hero2')
<section class="about" id="artikel" data-aos="fade-up">
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                {{-- <h1 class="my-4">Page Heading
                <small>Secondary Text</small>
            </h1> --}}
                @foreach ($data['artikels'] as $item)
                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top" src="{{asset('').$item->poster}}" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">{{$item->title}}</h2>
                        <p class="card-text">
                            {{$item->headline}}
                        </p>
                        <a href="/artikel/pag?w={{$item->id}}" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on January 1, 2020 cat
                        <a href="/artikel/pag?w={{$item->id}}">Baca</a>
                    </div>
                </div>
                @endforeach


                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        <a class="page-link" href="/artikel?o=1">&larr; Older</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="/artikel?o=1">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="/artikel/pag?w={{$item->id}}">Web Design</a>
                                    </li>
                                    <li>
                                        <a href="/artikel/pag?w={{$item->id}}">HTML</a>
                                    </li>
                                    <li>
                                        <a href="/artikel/pag?w={{$item->id}}">Freebies</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="/artikel/pag?w={{$item->id}}">JavaScript</a>
                                    </li>
                                    <li>
                                        <a href="/artikel/pag?w={{$item->id}}">CSS</a>
                                    </li>
                                    <li>
                                        <a href="/artikel/pag?w={{$item->id}}">Tutorials</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Side Widget</h5>
                    <div class="card-body">
                        You can put anything you want inside of these side widgets. They are easy to use, and feature
                        the
                        new Bootstrap 4 card containers!
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
</section>
@include('Template3.foot')
