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
    <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{asset('mediumish')}}/img/logo.png" alt="logo">
        </a>
        <!-- End Logo -->
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <!-- Begin Menu -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Daftar Isi</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('blog-list')}}">Semua Post</a>
                </li>
            </ul>
            <!-- End Menu -->
            <!-- Begin Search -->
            <form action="{{route('blog.cari')}}" method="get" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" name="cari" placeholder="Search">
                <input type="submit" class="btn btn-dark btn-sm" value="Cari">
            </form>
            <!-- End Search -->
        </div>
    </div>
</nav>
<!-- End Nav
================================================== -->
