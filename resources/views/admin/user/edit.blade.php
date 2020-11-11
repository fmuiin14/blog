@extends('template_backend.home');

@section('judul')
Edit User
@endsection

@section('content')

@if (count($errors)>0)
@foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{$error}}
</div>
@endforeach
@endif

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{Session('success')}}
</div>
@endif


<form action="{{ route('user.update', $users->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Nama User</label>
        <input type="text" class="form-control" name="name" value="{{$users->name}}">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" value="{{$users->email}}" readonly>
    </div>

    <div class="form-group">
        <label>Tipe User</label>
        <select class="form-control" name="tipe">
            <option value="" holder disabled>Pilih Tipe User</option>
            <option value="1" @if($users->tipe == 1)
                selected
                @endif
                >Administrator</option>
            <option value="0" @if ($users->tipe == 0)
                selected
                @endif
                >Penulis</option>
        </select>
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block">Update User</button>
    </div>

</form>



@endsection
