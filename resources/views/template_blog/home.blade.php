<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('mediumish')}}/img/favicon.ico">
    <title>Fathul Muiin Blog</title>
    @include('includes.style')
</head>

<body>

    @include('includes.navbar')

    @include('includes.title')

    @yield('content')

    @include('includes.widget')

    @include('includes.footer')

    </div>
    <!-- /.container -->

    @include('includes.script')
</body>

</html>
