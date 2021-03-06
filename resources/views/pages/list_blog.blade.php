@extends('template_blog.list-blog')

@section('title')
List Post
@endsection

@section('content')

<!-- Begin Author Posts
================================================== -->
<div class="graybg authorpage">
    <div class="container">
        <div class="listrecent listrelated">

            <!-- begin post -->
            @foreach ($data as $list_post)
            <div class="authorpostbox">
                <div class="card">
                    <a href="#">
                        <img class="img-fluid img-thumb" src="{{asset($list_post->gambar)}}" alt="">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="#">{{$list_post->judul}}</a></h2>
                        <h4 class="card-text">
                            <?= substr($list_post->content, 0, 150); ?>...
                        </h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
                                <span class="meta-footer-thumb">
                                    <a href="#"><img class="author-thumb"
                                            src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                            alt="Sal"></a>
                                </span>
                                <span class="author-meta">
                                    <span class="post-name"><a href="#">{{$list_post->users->name}}</a></span><br />
                                    <span class="post-date">{{ $list_post->created_at->diffForHumans() }}</span>
                                </span>
                                <span class="post-read-more"><a href="#" title="Read Story"><svg class="svgIcon-use"
                                            width="25" height="25" viewbox="0 0 25 25">
                                            <path
                                                d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                fill-rule="evenodd"></path>
                                        </svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- end post -->
        </div>
        {{-- <div class="col-md-12">
            <div class="text-center">{{$data->links()}}
    </div>
</div> --}}
<div class="d-flex">
    <div class="mx-auto">
        {{$data->links("pagination::bootstrap-4")}}
    </div>
</div>
@endsection
