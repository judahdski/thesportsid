<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Blog;
use App\Models\News;
use App\Models\Category;

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




// Blog manager

    public function index()
    {
        $users = User::all();
        $categories = Category::all();

        return view('dashboard.user-blog-manager', compact('users', 'categories'));
    }

    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        $mode = 'create';

        return view('blog-manager.form', compact('users', 'categories', 'mode'));
    }

    public function store(Request $request)
    {
        $b = new Blog;

        $b->category_id = $request->category;
        $b->user_id = $request->user_id;
        $b->title = $request->title;
        $b->read_time = $request->read_time;
        $b->slug = str_replace(" ", "_", $request->title);
        $b->excerpt = $request->excerpt;
        $b->body = $request->body_blog;

        $b->save();

        return redirect('blog');
    }

    public function edit($id)
    {
        $mode = 'update';
        $categories = Category::all();
        $blog = Blog::find($id);

        return view('blog-manager.form', compact('mode', 'categories', 'blog'));
    }

    public function update(Request $request, $id)
    {
        $b = Blog::find($id);

        $b->category_id = $request->category;
        $b->title = $request->title;
        $b->read_time = $request->read_time;
        $b->slug = str_replace(" ", "_", $request->title);
        $b->excerpt = $request->excerpt;
        $b->body = $request->body_blog;

        $b->save();

        return redirect('blog');
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);

        $blog->delete();

        return redirect('blog');
    }
}
