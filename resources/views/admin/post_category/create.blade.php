@extends('admin.admin_master')
@section('admin')

<div class="container">
    <h4>Add Post Category</h4>
    <form method="POST" action="{{ route('post_category.store') }}">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Slug</label>
            <input type="text" name="slug" value="{{ old('slug') }}" class="form-control">
            @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button class="btn btn-success">Save</button>
    </form>
</div>

@endsection
