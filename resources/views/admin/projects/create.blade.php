@extends('layouts.admin')

@section('content')

    <h4>Crea il progetto</h4>
    

    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="client_name" class="form-label">Client Name</label>
            <input type="text" class="form-control" id="client_name" name="client_name" value="{{ old('client_name') }}">
        </div>
        @error('client_name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="cover_image" class="form-label">Image</label>
            <input class="form-control" type="file" id="cover_image" name="cover_image">
        </div>
        @error('cover_image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label for="summary" class="form-label">Summary</label>
            <textarea class="form-control" id="summary" name="summary" rows="10">{{ old('summary') }}</textarea>
        </div>
        @error('summary')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
    
@endsection