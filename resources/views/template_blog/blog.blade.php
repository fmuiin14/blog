<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Personal Blog yang berisi banyak hal tentang pemrograman, pemikiran, tips, dan macam-macam lainnya">
    <meta name="author" content="Fathul Muiin">
    <link rel="icon" href="{{ asset('frontend/assets/img/favicon.ico')}}">
    <title>@yield('title')</title>

    @include('template_blog.style')
</head>

<body>

    @include('template_blog.navbar')
    <div class="container">
        {{-- <div class="row"> --}}
        @include('template_blog.title')

        @yield('content')

        <!-- JUMBO CATEGORIES CLOUD -->

        <div class="jumbotron fortags mt-4" style="background-color: #143055 !important">
            <div class="row">
                <div class="col-md-4 align-self-center text-center">
                    <h2 class="hidden-sm-down text-white">Explore &rarr;</h2>
                </div>


                <div class="col-md-8 align-self-center text-center">
                    @yield('kategori-explore')
                </div>
            </div>

        </div>
        <!-- /.container -->


        @include('template_blog.footer')
        {{-- </div> --}}
    </div>
    <!-- /.container -->

    @include('template_blog.script')
</body>

</html>
