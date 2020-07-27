@extends('layout/main')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Banners</h1>
  <div>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Banner Deleted</a>
    <a href="{{ url('/banner/create') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Add new Banner</a>
  </div>
</div>

<!-- Content Row -->
<div class="card mb-3 shadow bg-white rounded">
    <div class="card-header">
        Table Banners
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach( $banner as $data )
            <tbody>
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $data->name }}</td>
                <td>{{ $data->description }}</td>
                <td><img width="150px" src="{{ url('/dataFile/'.$data->image) }}"></td>
                <td>
                    <a href="/banner/{{ $data->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                    <form action="/banner/{{ $data->id }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
<!-- container-fluid -->
</div>
@endsection