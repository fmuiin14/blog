@extends('template_blog.isi-blog')

@section('content')
<!-- Begin Post -->
@foreach ($data as $isi_post)

<div class="col-md-8 col-md-offset-2 col-xs-12">
    <div class="mainheading">

        <h1 class="posttitle">{{$isi_post->judul}}</h1>

    </div>

    <!-- Begin Featured Image -->
    <img class="featured-image img-fluid" src="{{asset($isi_post->gambar)}}" alt="">
    <!-- End Featured Image -->

    <!-- Begin Post Content -->
    <div class="article-post">
        <br>
        <?= $isi_post->content; ?>
        </br>
    </div>
    <!-- End Post Content -->

    <!-- Begin Tags -->
    <div class="after-post-tags">
        <ul class="tags">
            <li><a href="#">Design</a></li>
            <li><a href="#">Growth Mindset</a></li>
            <li><a href="#">Productivity</a></li>
            <li><a href="#">Personal Growth</a></li>
        </ul>
    </div>
    <!-- End Tags -->

</div>
<!-- End Post -->
@endforeach
@endsection
