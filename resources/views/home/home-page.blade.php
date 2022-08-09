@extends('layouts.main')

@section('main-content')
<style>
    .home-container
    {
        width: 100%;
        height: calc(100vh - 100px);
    }

    /* info-section page */

    .club-info-container {
        width: 100%;
        padding: 10px 0;

        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    div.input-bar {
        margin: 0 0 50px;
    }

    .card {
        width: 1100px;
        background-color: white;
        box-shadow: 0px 0px 10px rgb(39, 45, 57, 0.3);
        border-radius: 25px;
        overflow: hidden;

        display: flex;
        flex-direction: column;
    }

    .card .image-section {
        width: 100%;
        height: 400px;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card .desc-section {
        position: relative;

        width: 100%;
        padding: 20px 50px 50px;
        background-color: #f5f5f5;

        border-top-left-radius: 35px;
        border-top-right-radius: 35px;

        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

        color: #231d42;

        transition: 0.3s ease;
    }

    .desc-section div {
        width: 100%;
    }

    .desc-section .arrow {
        position: relative;
        z-index: 100;

        display: flex;
        justify-content: center;
    }

    .arrow ion-icon {
        font-size: 1.5em;
        cursor: pointer;
    }

    .arrow ion-icon:last-child {
        display: none;
    }

    /* ---------- active ---------- */

    .arrow.active ion-icon:first-child {
        display: none;
    }

    .arrow.active ion-icon:last-child {
        display: block;
    }

    /* ---------- -active- ---------- */

    .desc-section .side-detail {
        display: none;

        flex-direction: row;
        margin: 25px 0 40px;
    }

    .side-detail .item:first-child,
    .item:nth-child(3),
    .item:nth-child(5) {
        margin: 0 100px 25px 0;
    }

    /* ---------- active ---------- */

    .desc-section.active .side-detail {
        display: flex;
    }

    /* ---------- -active- ---------- */

    .main-detail .title {
        margin: 0 0 30px;

        font-size: 2em;
        font-weight: 600;
    }

    .main-detail .body {
        font-size: 1.115em;
        text-align: justify;

        line-height: 1.45em;
        letter-spacing: 0.02em;
    }

    a.error-text {
        width: 100%;
        height: calc(100vh - 230px);
        
        display: flex;
        justify-content: center;
        align-items: center;
    }

    a.error-text p {
        font-size: 2em;
        font-weight: 500;
        color: rgba(150, 150, 150, 0.5);
    }
</style>

<div class="home-container">
    @switch($title)
    @case("Home")

    <div class="d-flex flex-column justify-content-center align-items-start"
        style="height:calc(100vh - 89px); padding: 0 50px">
        <h2>Welcome to <br> <span class="badge bg-danger text-wrap rounded-3 px-1 mt-2"><a href="/"
                    class="fs-1 text-reset text-decoration-none">theSports-id</a></span></h2>
        <p class="fw-lighter fs-3" style="color: rgb(60, 67, 100)">website penyedia informasi seputar olahraga</p>
        <p class="fs-6 mt-3" style="color: rgb(100, 100, 100)">Kamu bisa mencari semua informasi tentang olahraga di sini.
        </p>

        @if (Route::has('login'))
        @auth
        <a type="button" class="d-flex align-items-baseline" href="{{ route('search-bar') }}">Ayo cari di sini &nbsp;
            <ion-icon name="arrow-forward-outline"></ion-icon></a>
        @else
        <a type="button" class="d-flex align-items-baseline" href="{{ route('search-bar') }}">Ayo mulai &nbsp;
            <ion-icon name="arrow-forward-outline"></ion-icon></a>
        @endauth
        @endif
    </div>

    @break
    @case("Search Bar")

    <div class="d-flex flex-column justify-content-center align-items-center" style="height: inherit;">
        <span class="badge bg-danger text-wrap rounded-3 px-1 mt-2"><a href="/"
            class="fs-1 text-reset text-decoration-none">theSports-id</a></span>
        <p class="fs-3 mt-4" style="color: rgb(60, 67, 100)">website penyedia informasi seputar olahraga</p>
        <p class="fs-5 font-monospace" style="color: rgb(100, 100, 100)">Kamu bisa mencari semua informasi tentang olahraga di sini.</p>
        @include('partials.search-input')
    </div>

    @break
    @case("Info Section")
    
    <div class="club-info-container">

        @include('partials.search-input')

        @if ($club->isEmpty())
            <h3 class="my-5">Maaf, data yang anda cari tidak ditemukan.</h3>
            <small class="mt-5"><a href="/" class="py-3 px-4 text-muted text-decoration-none">Silahkan click di sini untuk kembali ke halaman beranda.</a></small>
            @else
            @foreach ($club as $c)
                <div class="card">
                    <section class="image-section"><img src="{{ $c->image }}" width="300"></section>
                    <section class="desc-section">
                        <div class="arrow">
                            <ion-icon name="chevron-up-outline"></ion-icon>
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </div>
                        <div class="side-detail">
                            <div class="box-item">
                                <div class="item">
                                    <h4>Full name</h4>
                                    <p> {{ $c->full_name }} ({{ $c->short_name }})</p>
                                </div>
                                <div class="item">
                                    <h4>Founded</h4>
                                    <p> {{ $c->founded }}</p>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="item">
                                    <h4>Head Coach</h4>
                                    <p> {{ $c->head_coach }}</p>
                                </div>
                                <div class="item">
                                    <h4>Owner</h4>
                                    <p> {{ $c->owner }}</p>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="item">
                                    <h4>League</h4>
                                    <p> {{ $c->league }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="main-detail">
                            <h2 class="title"> {{ $c->full_name }}</h2>
                            <div class="body">{!! $c->body_desc !!}</div>
                        </div>
                    </section>
                </div>
            @endforeach
        @endif
    </div>
    @break

    @default
    <p>There's nothing in here</p>
    @endswitch
</div>

<script>
    const arrowBtn = document.querySelector('.arrow');
    const descSection = document.querySelector('.desc-section');

    arrowBtn.addEventListener('click', function () {
        arrowBtn.classList.toggle('active');
        descSection.classList.toggle('active');
    })
</script>
@endsection

