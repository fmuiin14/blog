<!-- JUMBO CATEGORIES CLOUD -->

<div class="jumbotron fortags mt-4" style="background-color: #143055 !important">
    <div class="row">
        <div class="col-md-4 align-self-center text-center">
            <h2 class="hidden-sm-down text-white">Explore &rarr;</h2>
        </div>


        <div class="col-md-8 align-self-center text-center">
            @foreach ($category as $hasil)
            <a href="#" class="badge badge-pill badge-danger" style="font-size: 8pt;"
                aria-label="{{$hasil->name}}">{{$hasil->name}} ({{$hasil->posts->count()}})</a>
            @endforeach
        </div>
    </div>

</div>
{{-- end jumbotron --}}
