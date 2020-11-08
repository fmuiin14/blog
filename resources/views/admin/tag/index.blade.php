@extends('template_backend.home');

@section('judul')
Tag
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

<a href="{{route('tag.create')}}" class="btn btn-info btn-sm mb-3">Tambah Kategori</a>

<table class="table table-striped table-hover table-sm table-bordered">
    <thead>
        <tr>
            <th>
                No
            </th>

            <th>
                Nama Tag
            </th>
            <th>
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @if (count($tags) >= 1)
        @foreach ($tags as $tag => $hasil)
        <tr>
            <td>{{$tag + $tags->firstitem()}}</td>
            <td>{{$hasil->name}}</td>
            <td>

                <form action="{{ route('tag.destroy', $hasil->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{route('tag.edit', $hasil->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <button type="submit" href="{{ route('tag.destroy', $hasil->id) }}"
                        class="btn btn-danger btn-sm">Delete</button>
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

{{$tags->links()}}

@endsection
