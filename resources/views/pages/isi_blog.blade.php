@extends('template_blog.isi_blog')

@section('title')
Fathul Muiin Personal Blog
@endsection

@section('content')

@foreach ($posts as $post)
<!-- Begin Post -->
<div class="col-md-8 col-md-offset-2 col-xs-12">
    <div class="mainheading">

        <h1 class="posttitle">{{$post->judul}}</h1>
        <h4 class="">{{$post->users->name}}</h4>
        <p class="">{{$post->created_at->diffForHumans()}}</p>
        <span class="badge badge-pill badge-primary">{{$post->category->name}}</span>

    </div>

    <!-- Begin Featured Image -->
    <img class="featured-image img-fluid" src="{{ asset($post->gambar)}}" alt="">
    <!-- End Featured Image -->

    <!-- Begin Post Content -->
    <div class="article-post">
        <p>
            {{-- {{$post->content }} --}}
            <?= $post->content; ?>
        </p>
    </div>
    <!-- End Post Content -->

    <!-- Begin Tags -->
    <div class="after-post-tags">
        @foreach ($tags as $tag)
        <ul class="tags">
            <li><a href="#">{{$tag->name}}</a></li>
        </ul>
        @endforeach
    </div>
    <!-- End Tags -->

</div>
<!-- End Post -->
@endforeach
@endsection
