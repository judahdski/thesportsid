@extends('layouts.main')

@section('main-content')
<style>
    .news-page-container {
        margin: 35px 5rem;
    }

    /*  */
    .title-blog-page {
        padding-bottom: 30px;
    }

    .title-blog-page h3 {
        margin: 0 0 35px;
    }

    .title-blog-page p {
        font-size: 1.125em;
        line-height: 1.5em;

        color: #2c2c2c
    }

    .title-blog-page p {
        color: rgb(29, 29, 29);
    }

    /*  */
    .nav-category {
        padding: 0 0 35px;
    }

    .live-stream-field {
        padding: 10px 45px 10px 30px;
    }

    .live-stream-field p {
        font-size: 0.75em;
        margin-right: 20px;
    }

    .live-stream-field a {
        margin: 0 10px;
    }
</style>


<section class="news-page-container">
    <div class="title-blog-page">
        <h3 style="font-weight: 600;"><span class="badge bg-danger text-wrap rounded-3 px-1 mt-2"><a href="/"
                    class="fs-3 text-reset text-decoration-none">theSports-id</a></span> &nbsp; Blogs</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non qui nobis ullam inventore tempore accusantium
            quisquam nulla odit eligendi, quaerat quasi sunt ducimus voluptas deserunt atque ex magni! Ab, minima!</p>
    </div>

    <div class="nav-category">
        @include('partials.nav-link-category')
    </div>


    <div class="container">
        <div class="row justify-content-center d-flex flex-column flex-md-row">
            <div class="col-md-7 me-md-4">
                <div class="row">
                    <div class="col">
                        <a href="/blogs/{{ $blogs[0]->slug }}" class="text-reset text-decoration-none">
                            <div class="card mb-3">
                                <img src="https://source.unsplash.com/1200x600?{{ $title }}"
                                    class="card-img-top" alt="{{ $title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $blogs[0]->title }}</h5>
                                    <small class="text-muted"><p class="card-text">Last updated
                                            {{ $blogs[0]->created_at->diffForHumans() }}</p></small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    @foreach ($blogs as $b)
                    <div class="col-lg-6 mb-4">
                        <a href="/blogs/{{ $b->slug }}" class="text-reset text-decoration-none">
                            <div class="card">
                                <img src="https://source.unsplash.com/600x350?{{ $title }}"
                                    class="card-img-top" alt="{{ $title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $b->title }}</h5>
                                    <p class="card-text">{{ $b->excerpt }}</p>
                                    <a href="/blogs/{{ $b->slug }}" class="btn btn-link">Read more..</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 ms-md-4 p-0">
                <div style="background-color: #F7F9FF;">
                    <div class="live-stream-field bg-white shadow">
                        <div class="d-flex flex-row align-items-end">
                            <p style="color:red;">Live</p>
                            <a href="https://www.skysports.com/watch" target="_blank"><img src="data:image/png;base64,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" alt="Sky-sports" class="rounded-circle" width="50" style="border:.5px solid #e4e4e4"></a>
                            <a href="https://watch.nba.com/packages?gclid=Cj0KCQiA2ZCOBhDiARIsAMRfv9JnlXq-RsrqbZw5cYzNp6wOw07_qVJaex35qxBqn3_HAP2uZTI8aXMaAkN2EALw_wcB&cid=nba:ilp:paid:sem:sa360:na:eg:acq:sub:dtc-acq:global:dynlan:RoAPAC_G_Secondary_General_English_HI:NBA_Games_Exact:NBA+live:43700063459334944:&ef_id=Cj0KCQiA2ZCOBhDiARIsAMRfv9JnlXq-RsrqbZw5cYzNp6wOw07_qVJaex35qxBqn3_HAP2uZTI8aXMaAkN2EALw_wcB:G:s&s_kwcid=AL!5120!3!554376259157!e!!g!!nba%20live!12967753426!120437198343&gclsrc=aw.ds" target="_blank"><img src="https://www.pngarts.com/files/12/NBA-Logo-PNG-Transparent-Image.png" alt="NBA Live" class="rounded-circle" width="50" height="50" style="border:0.5px solid #e4e4e4; object-fit:contain;"></a>
                            <a href="https://connect-id.beinsports.com/id" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/2/20/Bein_sport_logo.png" alt="Bein Sports" class="rounded-circle" width="50" height="50" style="border:0.5px solid #e4e4e4; object-fit:contain;"></a>
                        </div>
                    </div>
                    <div class="row d-flex flex-column">
                        @foreach ($news as $n)
                        <div class="col px-3 my-4">
                            <a href="/news/{{ $n->slug }}" class="text-reset text-decoration-none">
                                <h4>{{ $n->title }}</h4>
                                <small class="text-muted">Last updated {{ $n->created_at->diffForHumans() }}</small></small>
                            </a>
                        </div>  
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



@endsection