@extends('admin.admin_master')
@section('admin')

<div class="card shadow-sm">
    <div class="card-header">
        <h4>Add New Advert</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('adverts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Type</label>
                <select name="type" class="form-control" required>
                    <option value="">-- Select Type --</option>
                    <option value="poster">Poster</option>
                    <option value="flyer">Flyer</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Save Advert</button>
        </form>
    </div>
</div>

@endsection
