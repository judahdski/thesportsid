@extends('layouts.main')

@section('main-content')

<style>
    .container-about-us {
        padding: 95px 0;
    }

    h1.title-about-us {
        font-size: 3em;
        font-weight: 600;
        color: #2F2D5A;
        margin-bottom: 80px;
    }

    .img-about-us {
        margin-bottom: 100px;
    }

    section.our-story {
        margin-bottom: 150px;
    }

    section.our-story h3 {
        margin-bottom: 50px;
    }

    section.our-story h3 span {
        color: #FF2A54;
    }

    section.our-team {
        width: 100%;
    }

    section.our-team .row {
        margin-bottom: 50px;
    }

    section.our-team h3 span {
        color: #FF2A54;
    }
</style>

<div class="container-about-us">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <h1 class="text-center title-about-us">theSports-id</h1>

            <div class="img-about-us d-flex justify-content-center">
                    <img src="img/home-page.png" alt="..." width="900" class="rounded-3 shadow">
            </div>

            <section class="our-story row px-5">
                <div class="col px-5">
                    <h3 class="text-center fs-1"><span>Cerita</span> Kami</h3>
                    <p class="text-center fs-5">TheSports-id menyediakan blog manager untuk para pengguna menuangkan 
                        berita olahraga apa saja yang ingin pengguna buat.</p>
                </div>
            </section>

            <section class="our-team">
                <div class="row">
                    <div class="col">
                        <h3 class="fs-1"><span>Tim</span> Kami</h3>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-md-4">
                        <div class="card rounded-3">
                            <img src="img/admin_pict/admin_vitria.jpeg" class="card-img-top" height="300" style="object-fit: cover; object-position:0 80%;">
                            <div class="card-body">
                                <h5 class="card-title">Vitria Anggraeni</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card rounded-3">
                            <img src="img/person-2.jpg" class="card-img-top" height="300" style="object-fit: cover; object-position:0 ">
                            <div class="card-body">
                                <h5 class="card-title">Judah Joshua Martin Dasuki</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card rounded-3">
                            <img src="img/admin_pict/admin_deya.jpeg" class="card-img-top" height="300" style="object-fit: cover; object-position:0 25%;">
                            <div class="card-body">
                                <h5 class="card-title">Deya</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection