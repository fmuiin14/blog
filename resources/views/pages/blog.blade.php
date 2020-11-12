@extends('template_blog.blog')

@section('title')
Fathul Muiin Personal Blog
@endsection

@section('content')
<!-- Begin Featured
	================================================== -->
<section class="featured-posts">
    <div class="section-title">
        <h2><span>Postingan Terbaru</span></h2>
    </div>
    <div class="card-columns listfeaturedtag">

        <!-- begin post -->
        @foreach ($posts as $post => $hasil)
        {{-- @foreach ($posts as $post) --}}
        <div class="card">
            <div class="row">
                <div class="col-md-5 wrapthumbnail">
                    <a href="{{route('blog.isi', $hasil->slug)}}">
                        <div class="thumbnail" style="background-image:url({{$hasil->gambar}});">
                        </div>
                    </a>
                </div>
                <div class="col-md-7">
                    <div class="card-block">
                        <h2 class="card-title"><a href="{{route('blog.isi', $hasil->slug)}}">{{ $hasil->judul}}</a></h2>
                        <h4 class="card-text">{{substr($hasil->content, 0, 150)}}...</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
                                <span class="meta-footer-thumb">
                                    <a href="#"><img class="author-thumb"
                                            src="https://s.gravatar.com/avatar/0215dcc8ed42c9eb96e679a1b57d4126?s=80"
                                            alt="Sal"></a>
                                </span>
                                <span class="author-meta">
                                    <span class="post-name"><a
                                            href="author.html">{{$hasil->users->name}}</a></span><br />
                                    <span class="post-date">{{ $hasil->created_at->diffForHumans() }}</span>
                                    <span class="dot"></span><span class="post-read">{{$hasil->category->name}}</span>
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
        </div>
        @endforeach
        <!-- end post -->


    </div>
</section>
<!-- End Featured
	================================================== -->

<!-- Begin List Posts
	================================================== -->
<section class="recent-posts">
    <div class="section-title">
        <h2><span>All Stories</span></h2>
    </div>
    <div class="card-columns listrecent">

        <!-- begin post -->
        <div class="card">
            <a href="post.html">
                <img class="img-fluid" src="{{ asset('frontend/img/demopic/5.jpg')}}" alt="">
            </a>
            <div class="card-block">
                <h2 class="card-title"><a href="post.html">Autumn doesn't have to be nostalgic, you know?</a>
                </h2>
                <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</h4>
                <div class="metafooter">
                    <div class="wrapfooter">
                        <span class="meta-footer-thumb">
                            <a href="author.html"><img class="author-thumb"
                                    src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                    alt="Sal"></a>
                        </span>
                        <span class="author-meta">
                            <span class="post-name"><a href="author.html">Sal</a></span><br />
                            <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                class="post-read">6 min read</span>
                        </span>
                        <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use"
                                    width="25" height="25" viewbox="0 0 25 25">
                                    <path
                                        d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                        fill-rule="evenodd"></path>
                                </svg></a></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end post -->

        <!-- begin post -->
        <div class="card">
            <a href="post.html">
                <img class="img-fluid" src="{{asset('frontend/img/demopic/6.jpg')}}" alt="">
            </a>
            <div class="card-block">
                <h2 class="card-title"><a href="post.html">Best galleries in the world with photos</a></h2>
                <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</h4>
                <div class="metafooter">
                    <div class="wrapfooter">
                        <span class="meta-footer-thumb">
                            <a href="author.html"><img class="author-thumb"
                                    src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                    alt="Sal"></a>
                        </span>
                        <span class="author-meta">
                            <span class="post-name"><a href="author.html">Sal</a></span><br />
                            <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                class="post-read">6 min read</span>
                        </span>
                        <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use"
                                    width="25" height="25" viewbox="0 0 25 25">
                                    <path
                                        d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                        fill-rule="evenodd"></path>
                                </svg></a></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end post -->

        <!-- begin post -->
        <div class="card">
            <a href="post.html">
                <img class="img-fluid" src="{{asset('frontend/img/demopic/7.jpg')}}" alt="">
            </a>
            <div class="card-block">
                <h2 class="card-title"><a href="post.html">Little red dress and a perfect summer</a></h2>
                <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</h4>
                <div class="metafooter">
                    <div class="wrapfooter">
                        <span class="meta-footer-thumb">
                            <a href="author.html"><img class="author-thumb"
                                    src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                    alt="Sal"></a>
                        </span>
                        <span class="author-meta">
                            <span class="post-name"><a href="author.html">Sal</a></span><br />
                            <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                class="post-read">6 min read</span>
                        </span>
                        <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use"
                                    width="25" height="25" viewbox="0 0 25 25">
                                    <path
                                        d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                        fill-rule="evenodd"></path>
                                </svg></a></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end post -->

        <!-- begin post -->
        <div class="card">
            <a href="post.html">
                <img class="img-fluid" src="{{asset('frontend/img/demopic/8.jpg')}}" alt="">
            </a>
            <div class="card-block">
                <h2 class="card-title"><a href="post.html">Thinking outside the box can help you prosper</a>
                </h2>
                <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</h4>
                <div class="metafooter">
                    <div class="wrapfooter">
                        <span class="meta-footer-thumb">
                            <a href="author.html"><img class="author-thumb"
                                    src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                    alt="Sal"></a>
                        </span>
                        <span class="author-meta">
                            <span class="post-name"><a href="author.html">Sal</a></span><br />
                            <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                class="post-read">6 min read</span>
                        </span>
                        <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use"
                                    width="25" height="25" viewbox="0 0 25 25">
                                    <path
                                        d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                        fill-rule="evenodd"></path>
                                </svg></a></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end post -->

        <!-- begin post -->
        <div class="card">
            <a href="post.html">
                <img class="img-fluid" src="{{asset('frontend/img/demopic/9.jpg')}}" alt="">
            </a>
            <div class="card-block">
                <h2 class="card-title"><a href="post.html">10 Things you should know about choosing your
                        house</a></h2>
                <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</h4>
                <div class="metafooter">
                    <div class="wrapfooter">
                        <span class="meta-footer-thumb">
                            <a href="author.html"><img class="author-thumb"
                                    src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                    alt="Sal"></a>
                        </span>
                        <span class="author-meta">
                            <span class="post-name"><a href="author.html">Sal</a></span><br />
                            <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                class="post-read">6 min read</span>
                        </span>
                        <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use"
                                    width="25" height="25" viewbox="0 0 25 25">
                                    <path
                                        d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                        fill-rule="evenodd"></path>
                                </svg></a></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end post -->

        <!-- begin post -->
        <div class="card">
            <a href="post.html">
                <img class="img-fluid" src="{{asset('frontend/img/demopic/10.jpg')}}" alt="">
            </a>
            <div class="card-block">
                <h2 class="card-title"><a href="post.html">Visiting the world means learning cultures</a></h2>
                <h4 class="card-text">This is a longer card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</h4>
                <div class="metafooter">
                    <div class="wrapfooter">
                        <span class="meta-footer-thumb">
                            <a href="author.html"><img class="author-thumb"
                                    src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                    alt="Sal"></a>
                        </span>
                        <span class="author-meta">
                            <span class="post-name"><a href="author.html">Sal</a></span><br />
                            <span class="post-date">22 July 2017</span><span class="dot"></span><span
                                class="post-read">6 min read</span>
                        </span>
                        <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use"
                                    width="25" height="25" viewbox="0 0 25 25">
                                    <path
                                        d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                        fill-rule="evenodd"></path>
                                </svg></a></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- end post -->

    </div>
</section>
<!-- End List Posts
	================================================== -->
@endsection

@section('kategori-explore')
@foreach ($categories as $category)
<a href="#" class="badge badge-pill badge-danger" style="font-size: 8pt;" aria-label="laravel">{{$category->name}}</a>
@endforeach
@endsection
