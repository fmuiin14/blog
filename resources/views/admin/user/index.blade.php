@extends('template_backend.home');

@section('judul')
User
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

<a href="{{route('user.create')}}" class="btn btn-info btn-sm mb-3">Tambah User</a>

<table class="table table-striped table-hover table-sm table-bordered">
    <thead>
        <tr>
            <th>
                No
            </th>

            <th>
                Nama User
            </th>
            <th>
                Email
            </th>
            <th>
                Type
            </th>
            <th>
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @if(count($users) >= 1)
        @foreach ($users as $user => $hasil)
        <tr>
            <td>{{$user + $users->firstitem()}}</td>
            <td>{{$hasil->name}}</td>
            <td>{{$hasil->email}}</td>
            <td>
                @if ($hasil->tipe)
                <span class="badge badge-secondary">Administrator</span>
                @else
                <span class="badge badge-info">Penulis</span>
                @endif
            </td>
            <td>

                <form action="{{ route('user.destroy', $hasil->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{route('user.edit', $hasil->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <button type="submit" href="{{ route('user.destroy', $hasil->id) }}"
                        class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td class="text-center" colspan="3">tidak ada data</td>
        </tr>
        @endif
    </tbody>
</table>

{{$users->links()}}

@endsection
