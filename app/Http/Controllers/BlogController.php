<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Post $post)
    {
        $categories = Category::all();
        $posts = $post->latest()->take(6)->get();
        return view('pages/blog', compact('posts', 'categories'));
    }
    function isi_blog($slug)
    {
        $tags = Tag::where('slug', $slug)->get();
        $categories = Category::all();
        $posts = Post::where('slug', $slug)->get();
        return view('pages.isi_blog', compact('posts', 'categories', 'tags'));
    }

    public function list_blog()
    {
        $categories = Category::all();
        $posts = Post::latest()->paginate(9);
        return view('pages.list_blog', compact('posts', 'categories'));
    }

    public function list_category(category $category)
    {
        $categories = Category::all();

        $data_kategori = $category->hitungjumlah()->paginate();
        return view('pages.list_blog', compact('data_kategori', 'categories'));
    }

    public function cari(request $request)
    {
        $categories = Category::all();

        $data = Post::where('judul', $request->cari)->orWhere('judul', 'like', '%' . $request->cari . '%')->paginate(9);
        return view('pages.list_blog', compact('categories', 'data'));
    }
}
