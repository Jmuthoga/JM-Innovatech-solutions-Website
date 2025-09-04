@extends('admin.admin_master')
@section('admin')

<div class="card">
    <div class="card-header"><h4>Add New Video</h4></div>
    <div class="card-body">
        <form action="{{ route('videos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Video URL (YouTube Embed Link)</label>
                <input type="text" name="youtube_link" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Save Video</button>
        </form>
    </div>
</div>

@endsection

