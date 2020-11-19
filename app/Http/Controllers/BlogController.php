<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class BlogController extends Controller
{
    public function index(Post $post) {
        $category_widget = Category::all();
        $data = $post->latest()->take(6)->get();
        return view('pages.blog', compact('data', 'category_widget'));
    }
    
    public function isi_blog($slug) {
        $category_widget = Category::all();
        $data = Post::where('slug', $slug)->get();
        return view('pages.isi_blog', compact('data', 'category_widget'));
    }
    
    public function list_blog() {
        $category_widget = Category::all();
        $data = Post::latest()->paginate(6);
        return view('pages.list_blog', compact('data', 'category_widget'));
    }
    
    public function list_category(category $category) {
        $category_widget = Category::all();
        
        $data = Category::all();
        return view('pages.list_blog', compact('data', 'category_widget'));
    }

    public function cari(request $request) {
        $category_widget = Category::all();
        
        $data = Post::where('judul', $request->cari)->orWhere('judul','like','%'.$request->cari.'%')->paginate(6);
        return view('pages.list_blog', compact('data', 'category_widget'));
    }


}
