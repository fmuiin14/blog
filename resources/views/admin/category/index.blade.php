@extends('template_backend.home');

@section('content')
    <h1>ini adalah category</h1>
    
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
                    <a href="#" class="btn btn-primary btn-sm">Edit</a>    
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>    
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{$categories->links()}}

@endsection