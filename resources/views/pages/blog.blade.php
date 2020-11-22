@extends('template_blog.home')

@section('title')
Fathul Muiin Personal Blog
@endsection

@section('content')


<!-- Begin List Posts
	================================================== -->
<section class="recent-posts">
    <div class="section-title">
        <h2><span>Postingan Terbaru</span></h2>
    </div>
    <div class="card-columns listrecent">

        <!-- begin post -->
        @foreach ($data as $post_terbaru)
        <div class="card">
            <a href="{{route('blog-isi', $post_terbaru->slug)}}">
                <img class="img-fluid" src="{{$post_terbaru->gambar}}" alt="">
            </a>
            <div class="card-block">
                <h2 class="card-title"><a href="{{route('blog-isi', $post_terbaru->slug)}}">{{$post_terbaru->judul}}</a>
                </h2>
                <h4 class="card-text text-justify"><?= substr($post_terbaru->content, 0, 150); ?>...</h4>
                <div class="metafooter">
                    <div class="wrapfooter">
                        <span class="meta-footer-thumb">
                            <a href="#"><img class="author-thumb"
                                    src="https://secure.gravatar.com/avatar/0215dcc8ed42c9eb96e679a1b57d4126"
                                    alt="Fathul Muiin"></a>
                        </span>
                        <span class="author-meta">
                            <span class="post-name"><a href="#">{{$post_terbaru->users->name}}</a></span><br />

                            <span class="post-date">{{ $post_terbaru->created_at->diffForHumans() }}</span><span
                                class="dot"></span>

                            <a href="#" class="post-read">{{$post_terbaru->category->name}}</a>

                        </span>
                        <span class="post-read-more"><a href="#" title="Read Story"><svg class="svgIcon-use" width="25"
                                    height="25" viewbox="0 0 25 25">
                                    <path
                                        d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                        fill-rule="evenodd"></path>
                                </svg></a></span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- end post -->
    </div>

    <div class="row text-center mt-3">
        <div class="col-md-12">
            <a href="{{route('blog-list')}}" class="btn btn-outline-dark">Postingan Lainnya</a>
        </div>
    </div>

</section>
<!-- End List Posts
	================================================== -->

<!-- Begin List Posts
	================================================== -->
<section class="recent-posts">
    <div class="section-title">
        <h2><span>Newsletter</span></h2>
    </div>

    <div class="row">
        <div class="col-md-3 mt-5">

            <img src="{{asset('frontend/img/email.svg')}}" class="img-fluid" alt="">

        </div>

        <div class="col-md-9">

            {{-- <img src="{{asset('frontend/img/email.svg')}}" class="img-fluid" alt=""> --}}
            <form class="form-signin">
                <div class="text-center mb-4">
                    {{-- <img class="mb-4" src="{{asset('frontend/img/logo.png')}}" style="border-radius: 10px;" alt=""
                    width="72" height="72"> --}}
                    <h1 class="h3 mb-3 font-weight-normal custom-news mt-3">Silakan Isi Data Kamu</h1>
                    <p>Dapatkan informasi terbaru dari fmuiin blog dengan berlangganan Newsletter.</p>
                </div>

                <div class="form-label-group col-md-6 mx-auto mb-3">
                    <label for="inputName">Nama Kamu</label>
                    <input type="text" id="name" class="form-control" placeholder="Nama Kamu" required autofocus>
                </div>

                <div class="form-label-group col-md-6 mx-auto mb-3">
                    <label for="inputEmail">Email Kamu</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email" required>
                </div>

                <div class="col-md-12 text-center">
                    <button class="btn btn-primary" type="submit" disabled>Submit</button>
                </div>
            </form>
        </div>

    </div>


</section>
<!-- End List Posts
	================================================== -->

@endsection
