@extends('template_backend.home');

@section('judul')
Kategori
@endsection

@section('content')

@if (Session::has('success'))
<div class="alert alert-primary" role="alert">
    {{Session('success')}}
</div>
@endif

<a href="{{route('category.create')}}" class="btn btn-info btn-sm mb-3">Tambah Kategori</a>

<table class="table table-striped table-hover table-sm table-bordered">
    <thead>
        <tr>
            <th>
                No
            </th>

            <th>
                Nama Kategori
            </th>
            <th>
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category => $hasil)
        <tr>
            <td>{{$category + $categories->firstitem()}}</td>
            <td>{{$hasil->name}}</td>
            <td>
                <a href="{{route('category.edit', $hasil->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <a href="{{ route('category.destroy', $hasil->id) }}" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{$categories->links()}}

@endsection
