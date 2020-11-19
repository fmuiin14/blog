<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index(Post $post) {
        $data = $post->orderBy('created_at', 'desc')->get();
        return view('pages.blog', compact('data'));
    }

    public function isi_blog($slug) {
        $data = Post::where('slug', $slug)->get();
        return view('pages.isi_blog', compact('data'));
    }
}
