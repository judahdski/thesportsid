<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="text-decoration-none ps-3 pt-3 me-5" href="/"><p class="badge bg-danger rounded-3 px-1 fs-4" style="color: white">theSports-id</p></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="me-3 nav-link {{ ($active == 'home') ? ' active' : '' }}" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="me-3 nav-link {{ ($active == 'blog') ? 'active' : '' }}" href="{{ route('all-blogs') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="me-3 nav-link {{ ($active == 'about-us') ? 'active' : '' }}" href="{{ route('about') }}">Tentang kami</a>
                </li>
            </ul>
        </div>
        <div class="login-regist-menu">
            @if (Route::has('login'))
                <div class="d-flex">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="me-4 text-decoration-none" style="font-size: 0.85em; color:rgb(85, 85, 85); ">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-decoration-none" style="font-size: 0.85em; color:rgb(85, 85, 85); ">Masuk</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="mx-3 text-decoration-none" style="font-size: 0.85em; color:rgb(85, 85, 85); ">Daftar</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</nav>