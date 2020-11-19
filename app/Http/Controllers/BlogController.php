<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class BlogController extends Controller
{
    public function index(Post $post) {
        $category = Category::all();
        $data = $post->latest()->take(6)->get();
        return view('pages.blog', compact('data', 'category'));
    }
    
    public function isi_blog($slug) {
        $category = Category::all();
        $data = Post::where('slug', $slug)->get();
        return view('pages.isi_blog', compact('data', 'category'));
    }
    
    public function list_blog() {
        $category = Category::all();
        $data = Post::latest()->paginate(6);
        return view('pages.list_blog', compact('data', 'category'));
    }
}
