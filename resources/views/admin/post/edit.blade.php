@extends('template_backend.home');

@section('judul')
Edit Post
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


<form action="{{ route('post.update', $posts->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Judul</label>
        <input type="text" class="form-control" name="judul" value="{{$posts->judul}}">
    </div>

    <div class="form-group">
        <label>Kategori</label>
        <select class="form-control" name="category_id">
            <option selected disabled>Pilih Kategori</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" @if ($posts->category_id
                == $category->id)
                selected
                @endif
                {{-- @endforeach --}}
                >
                {{$category->name}}
            </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Pilih Tags</label>
        <select class="form-control select2" multiple="" name="tags[]">
            @foreach ($tags as $tag)
            <option value="{{$tag->id}}" @foreach ($posts->tags as $value)
                @if ($tag->id == $value->id)
                selected
                @endif
                @endforeach
                >{{$tag->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Konten</label>
        <textarea name="content" id="content" class="form-control">{{$posts->content}}</textarea>
    </div>

    <div class="form-group">
        <label>Thumbnail</label>
        <input type="file" class="form-control" name="gambar">
    </div>

    <div class="form-group">
        <button class="btn btn-primary btn-block">Update Post</button>
    </div>

</form>

@endsection
