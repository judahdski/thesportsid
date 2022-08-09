<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showAllBlogs()
    {
        return view('blog.all-blog-page', [
            'title' => 'theSports-id News',
            'active' => 'blog',
            'news' => News::latest()->paginate(5)->withQueryString(),
            'blogs' => Blog::latest()->paginate(5)->withQueryString(),
            'categories' => Category::all(),
            'page_type' => 'all_blogs',
        ]);
    }
    
    public function sortByCategory(Category $category) 
    {
        return view('blog.all-blog-page'
        , [
            'title' => $category->name,
            'active' => 'blog',
            'blogs' => $category->blogs,
            'news' => $category->news,
            'categories' => Category::all(),
            'page_type' => 'category_blogs',
        ]
    );
    }

    public function getBlogs(Blog $blog)
    {
        return view('blog.blog-page', [
            'title' => 'theSports-id Blogs',
            'active' => 'blog',
            'readTimes' => mt_rand(1,10),
            'blog' => $blog,
            'page' => 'blog',
        ]);
    }
    
    public function getNews(News $news)
    {
        return view('blog.blog-page', [
            'title' => 'theSports-id News',
            'active' => 'news',
            'readTimes' => mt_rand(1,10),
            'blog' => $news,
            'page' => 'news',
        ]);
    }
}
