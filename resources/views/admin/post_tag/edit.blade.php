@extends('admin.admin_master')

@section('content')
<div class="container mt-4">
    <h2>Edit Tag</h2>

    <form action="{{ route('post-tag.update', $tag->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Tag Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $tag->name) }}" required>
            @error('name')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $tag->slug) }}" required>
            @error('slug')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
            <small class="form-text text-muted">Unique identifier used in URLs (e.g. my-tag)</small>
        </div>

        <button type="submit" class="btn btn-primary">Update Tag</button>
        <a href="{{ route('post-tag.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<script>
    // Optional: Auto-generate slug from name
    document.getElementById('name').addEventListener('input', function() {
        let slug = this.value.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-+|-+$/g, '');
        document.getElementById('slug').value = slug;
    });
</script>
@endsection
