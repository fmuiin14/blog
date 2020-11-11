<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Personal Blog yang berisi banyak hal tentang pemrograman, pemikiran, tips, dan macam-macam lainnya">
    <meta name="author" content="Fathul Muiin">
    <link rel="icon" href="{{ asset('frontend/assets/img/favicon.ico')}}">
    <title>Fathul Muiin Blog</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('frontend/css/mediumish.css')}}" rel="stylesheet">
</head>

<body>

    <!-- Begin Nav
================================================== -->
    <nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <!-- Begin Logo -->
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('frontend/img/logo.png')}}" alt="logo">
            </a>
            <!-- End Logo -->
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <!-- Begin Menu -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Stories <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="post.html">Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="author.html">Author</a>
                    </li>
                </ul>
                <!-- End Menu -->
                <!-- Begin Search -->
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <span class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
                            <path
                                d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z">
                            </path>
                        </svg></span>
                </form>
                <!-- End Search -->
            </div>
        </div>
    </nav>
    <!-- End Nav
================================================== -->

    <!-- Begin Site Title
================================================== -->
    <div class="container">
        <div class="mainheading">
            <h1 class="sitetitle">Mediumish</h1>
            <p class="lead">
                Bootstrap theme, medium style, simply perfect for bloggers
            </p>
        </div>
        <!-- End Site Title
================================================== -->

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
                            <a href="post.html">
                                <div class="thumbnail" style="background-image:url({{$hasil->gambar}});">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-block">
                                <h2 class="card-title"><a href="post.html">{{ $hasil->judul}}</a></h2>
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
                                            <span class="dot"></span><span
                                                class="post-read">{{$hasil->category->name}}</span>
                                        </span>
                                        <span class="post-read-more"><a href="post.html" title="Read Story"><svg
                                                    class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
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
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg
                                            class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
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
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg
                                            class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
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
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg
                                            class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
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
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg
                                            class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
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
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg
                                            class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
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
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg
                                            class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
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

        <!-- Begin Footer
	================================================== -->
        <div class="footer">
            <p class="pull-left">
                Copyright &copy; 2017 Your Website Name
            </p>
            <p class="pull-right">
                Mediumish Theme by <a target="_blank" href="https://www.wowthemes.net">WowThemes.net</a>
            </p>
            <div class="clearfix">
            </div>
        </div>
        <!-- End Footer
	================================================== -->

    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
    </script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/ie10-viewport-bug-workaround.js') }}"></script>
</body>

</html>
