@extends('template_backend.home');

@section('judul')
Kategori
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

                <form action="{{ route('category.destroy', $hasil->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{route('category.edit', $hasil->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <button type="submit" href="{{ route('category.destroy', $hasil->id) }}"
                        class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{$categories->links()}}

@endsection
