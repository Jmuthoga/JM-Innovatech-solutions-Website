@extends('admin.admin_master')
@section('admin')

<div class="card shadow-sm">
    <div class="card-header">
        <h4>Edit Advert</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('adverts.update', $advert->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $advert->title }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Type</label>
                <select name="type" class="form-control" required>
                    <option value="poster" {{ $advert->type == 'poster' ? 'selected' : '' }}>Poster</option>
                    <option value="flyer" {{ $advert->type == 'flyer' ? 'selected' : '' }}>Flyer</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="3">{{ $advert->description }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Image (leave blank to keep current)</label>
                <input type="file" name="image" class="form-control">
                <p class="mt-2">
                    Current Image:<br>
                    <img src="{{ asset('uploads/adverts/'.$advert->image) }}" alt="{{ $advert->title }}" width="150">
                </p>
            </div>

            <button type="submit" class="btn btn-success">Update Advert</button>
        </form>
    </div>
</div>

@endsection
