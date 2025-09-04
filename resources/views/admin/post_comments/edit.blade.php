@extends('admin.admin_master')
@section('admin')

<div class="card">
    <div class="card-header"><h4>Edit Comment</h4></div>
    <div class="card-body">
        <form action="{{ route('post-comments.update', $comment->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control" required>
                    <option value="approved" {{ $comment->status == 'approved' ? 'selected' : '' }}>Approved</option>
                    <option value="pending" {{ $comment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="rejected" {{ $comment->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Comment</button>
        </form>
    </div>
</div>

@endsection
