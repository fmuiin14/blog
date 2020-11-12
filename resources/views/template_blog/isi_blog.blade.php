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



    <!-- Begin Article
================================================== -->
    <div class="container">
        <div class="row">

            @include('template_blog.share')

            @yield('content')

        </div>
        @include('template_blog.footer')
    </div>
    <!-- End Article
        ================================================== -->

    <div class="hideshare"></div>


    <!-- Begin AlertBar
            ================================================== -->
    <!-- <div class="alertbar">
                <div class="container text-center">
                    <img src="assets/img/logo.png" alt=""> &nbsp; Never miss a <b>story</b> from us, get weekly updates in your
                    inbox. <a href="#" class="btn subscribe">Get Updates</a>
                </div>
            </div> -->
    <!-- End AlertBar
                ================================================== -->



    @include('template_blog.script')
</body>

</html>
