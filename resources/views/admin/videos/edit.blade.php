@extends('admin.admin_master')
@section('admin')

<div class="card">
    <div class="card-header"><h4>Edit Video URL (YouTube Embed Link)</h4></div>
    <div class="card-body">
        <form action="{{ route('videos.update', $video->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Video URL (YouTube Embed Link)</label>
                <input type="text" name="url" class="form-control" value="{{ $video->url }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Video</button>
        </form>
    </div>
</div>

@endsection
