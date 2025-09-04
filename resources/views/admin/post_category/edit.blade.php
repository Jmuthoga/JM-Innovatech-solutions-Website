@extends('admin.admin_master')
@section('admin')

<div class="container">
    <h4>Edit Post Category</h4>
    <form method="POST" action="{{ route('post-category.update', $category->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', $category->name) }}" class="form-control">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Slug</label>
            <input type="text" name="slug" value="{{ old('slug', $category->slug) }}" class="form-control">
            @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button class="btn btn-success">Update</button>
    </form>
</div>

@endsection
