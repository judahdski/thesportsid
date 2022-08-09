<div class="nav-link-category">
    <ul class="nav nav-tabs justify-content-center">
        @foreach ($categories as $category)
        <li class="nav-item">
            <a class="nav-link {{ ($title == $category->name) ? 'active' : ''}}" 
                href="/blogs/category/{{ $category->slug }}">{{ $category->name }}</a>
        </li>
        @endforeach
    </ul>
</div>