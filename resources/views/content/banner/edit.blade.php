@extends('layout/main')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Banners</h1>
  <a href="/banner/{{ $banner->id }}/change" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Change Image</a>
</div>

<!-- Content Row -->
<div class="card mb-3 shadow bg-white rounded">
    <div class="card-header">
        Form Banner Edit
    </div>
    <div class="card-body">
    <form method="post" action="/banner/{{ $banner->id }}" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $banner->name }}" placeholder="Masukkan Nama">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Masukkan Description">{{ $banner->description }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
        <!-- <label for="image">Image</label>
            <input  name="image" type="file" class="form-control-file @error('image') is-invalid @enderror" id="image">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div> -->
        <button type="submit" class="btn btn-primary">Edit Data</button>
    </form>
    </div>
</div>
<!-- /.container-fluid -->
</div>
@endsection