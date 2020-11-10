@extends('template_backend.home');

@section('judul')
Post Yang Sudah Di Hapus
@endsection

@section('content')

@if (Session::has('success'))
<div class="alert alert-primary" role="alert">
    {{Session('success')}}
</div>
@elseif (Session::has('hapus'))
<div class="alert alert-danger" role="alert">
    {{Session('hapus')}}
</div>
@endif


<table class="table table-striped table-hover table-sm table-bordered">
    <thead>
        <tr>
            <th>
                No
            </th>

            <th>
                Nama Post
            </th>
            <th>
                Kategori
            </th>
            <th>
                Daftar Tags
            </th>
            <th>
                Thumbnail
            </th>
            <th>
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @if (count($posts) >= 1)
        @foreach ($posts as $post => $hasil)
        <tr>
            <td>{{$post + $posts->firstitem()}}</td>
            <td>{{$hasil->judul}}</td>
            <td>{{$hasil->category->name}}</td>
            <td>@foreach ($hasil->tags as $tag)
                <ul>
                    <li>{{$tag->name}}</li>
                </ul>
                @endforeach</td>
            <td><img src="{{ asset($hasil->gambar) }}" class="img-fluid" width="100px"></td>
            <td>

                <form action="{{ route('post.kill', $hasil->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('post.restore', $hasil->id) }}" class="btn btn-info btn-sm">Restore</a>
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td class="text-center" colspan="3">Tidak ada data</td>
        </tr>
        @endif
    </tbody>
</table>

{{$posts->links()}}

@endsection
