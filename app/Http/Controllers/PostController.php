<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.post.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'gambar' => 'required'
        ]);

        $gambar = $request->gambar;
        $new_gambar = time() . $gambar->getClientOriginalName();

        $post = Post::create([
            'judul' => $request->judul,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'gambar' => 'public/uploads/posts/' . $new_gambar,
            'slug' => Str::slug($request->judul)
        ]);

        $post->tags()->attach($request->tags);

        $gambar->move('public/uploads/posts/', $new_gambar);

        return redirect()->back()->with('success', 'Postingan Anda berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $posts = Post::findOrFail($id);

        return view('admin.post.edit', compact('posts', 'tags', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'category_id' => 'required',
            'content' => 'required'
        ]);

        $post = Post::findOrFail($id);

        if ($request->has('gambar')) {
            $gambar = $request->gambar;
            $new_gambar = time() . $gambar->getClientOriginalName();
            $gambar->move('public/uploads/posts/', $new_gambar);

            $update_data = [
                'judul' => $request->judul,
                'category_id' => $request->category_id,
                'content' => $request->content,
                'gambar' => 'public/uploads/posts/' . $new_gambar,
                'slug' => Str::slug($request->judul)
            ];
        } else {
            $update_data = [
                'judul' => $request->judul,
                'category_id' => $request->category_id,
                'content' => $request->content,
                // 'gambar' => 'public/uploads/posts/' . $new_gambar,
                'slug' => Str::slug($request->judul)
            ];
        }


        $post->tags()->sync($request->tags);
        $post->update($update_data);

        return redirect()->route('post.index')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->back()->with('hapus', 'Data berhasil di hapus ke trash');
    }

    public function tampil_hapus()
    {
        $posts = Post::onlyTrashed()->paginate(10);
        return view('admin.post.hapus', compact('posts'));
    }

    public function restore($id)
    {
        $posts = Post::withTrashed()->where('id', $id)->first();
        $posts->restore();

        return redirect()->back()->with('success', 'Data berhasil di restore');
    }

    public function kill($id)
    {
        $kills = Post::withTrashed()->where('id', $id)->first();
        $kills->forceDelete();

        return redirect()->back()->with('hapus', 'Data berhasil di hapus permanen');
    }
}
