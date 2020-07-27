@extends('layout/main')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Banners</h1>
  <a href="/banner/{{ $banner->id }}/edit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Edit Data</a>
</div>

<!-- Content Row -->
<div class="card mb-3 shadow bg-white rounded">
    <div class="card-header">
        Form Banner Edit
    </div>
    <div class="card-body">
    <form method="post" action="/banner/{{ $banner->id }}/change" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="form-group">
        <label for="image">Image</label>
            <input  name="image" type="file" class="form-control-file @error('image') is-invalid @enderror" id="image">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit Data</button>
    </form>
    </div>
</div>
<!-- /.container-fluid -->
</div>
@endsection