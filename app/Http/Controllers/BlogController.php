<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Post $post)
    {
        $categories = Category::all();
        $posts = $post->latest()->take(8)->get();
        return view('pages/blog', compact('posts', 'categories'));
    }

    public function isi_blog($slug)
    {
        $categories = Category::all();
        $posts = Post::where('slug', $slug)->get();
        return view('pages.isi_blog', compact('posts', 'categories'));
    }

    public function list_blog()
    {
        $categories = Category::all();
        $posts = Post::latest()->paginate(9);
        return view('pages.list_blog', compact('posts', 'categories'));
    }
}
