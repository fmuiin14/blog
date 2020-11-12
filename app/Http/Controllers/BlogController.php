<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Post $post)
    {
        $posts = $post->orderBy('created_at', 'desc')->get();
        return view('pages/blog', compact('posts'));
    }

    public function isi_blog($slug)
    {
        $posts = Post::where('slug', $slug)->get();
        return view('pages.isi_blog', compact('posts'));
    }
}
