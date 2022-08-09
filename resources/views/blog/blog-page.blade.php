@extends('layouts.main')

@section('main-content')
<style>
    
</style>

<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-8">
            <h1 class="title-news fw-bolder mb-4">{{ $blog->title }}</h1>
            @if ($blog->read_time)
                <small><p>{{ $blog->read_time }} menit - <a href="/blogs/category/{{ $blog->category->slug }}">{{ $blog->category->name }}</a> </p></small>
            @else
                <small><a href="/blogs/category/{{ $blog->category->slug }}">{{ $blog->category->name }}</a> </p></small>
            @endif
            @if ($page == 'blog')
                <img src="https://source.unsplash.com/1200x600?{{ $blog->category->name }}" class="img-fluid my-1" alt="...">
            @else
                <img src="{{ $blog->image }}" class="img-fluid my-1" alt="...">
            @endif
            <article class="px-4 pt-3 pb-0 fs-5" style="text-align:justify;">
                {!! $blog->body !!}
            </article>
            <a href="/all_blogs" class="btn btn-link text-decoration-none mt-5">Back..</a>
        </div>
    </div>
</div>
@endsection