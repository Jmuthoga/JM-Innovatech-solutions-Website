@extends('admin.admin_master')

@section('admin')
<div class="container">
    <h2 class="mb-4">Edit Portfolio Item</h2>

    <form action="{{ route('multy.update', $image->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Description --}}
        <div class="form-group mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ old('description', $image->description) }}</textarea>
            @error('description')<small class="text-danger">{{ $message }}</small>@enderror
        </div>

        {{-- Link --}}
        <div class="form-group mb-3">
            <label>Link</label>
            <input type="text" name="link" class="form-control" value="{{ old('link', $image->link) }}">
            @error('link')<small class="text-danger">{{ $message }}</small>@enderror
        </div>

        {{-- Category --}}
        <div class="form-group mb-3">
            <label>Category</label>
            <select name="category" class="form-control" required>
                <option value="">-- Select Category --</option>
                <option value="Management Systems" {{ old('category', $image->category) == 'Management Systems' ? 'selected' : '' }}>Management Systems</option>
                <option value="Websites" {{ old('category', $image->category) == 'Websites' ? 'selected' : '' }}>Websites</option>
                <option value="Recruitment Portals" {{ old('category', $image->category) == 'Recruitment Portals' ? 'selected' : '' }}>Recruitment Portals</option>
                <option value="eLearning Portals" {{ old('category', $image->category) == 'eLearning Portals' ? 'selected' : '' }}>eLearning Portals</option>
                <option value="Mobile Applications" {{ old('category', $image->category) == 'Mobile Applications' ? 'selected' : '' }}>Mobile Applications</option>
                <option value="E-commerce Websites" {{ old('category', $image->category) == 'E-commerce Websites' ? 'selected' : '' }}>E-commerce Websites</option>
                <option value="POS Systems" {{ old('category', $image->category) == 'POS Systems' ? 'selected' : '' }}>POS Systems</option>
            </select>
            @error('category')<small class="text-danger">{{ $message }}</small>@enderror
        </div>

        {{-- Current Image --}}
        <div class="form-group mb-3">
            <label>Current Image</label><br>
            <img src="{{ asset($image->image) }}" alt="Portfolio Image" width="150" class="border p-1">
        </div>

        {{-- Upload New Image --}}
        <div class="form-group mb-4">
            <label>Upload New Image</label>
            <input type="file" name="image" class="form-control">
            @error('image')<small class="text-danger">{{ $message }}</small>@enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

