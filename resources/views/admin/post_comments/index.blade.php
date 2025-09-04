@extends('admin.admin_master')
@section('admin')

<div class="card">
    <div class="card-header"><h4>All Post Comments</h4></div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Post</th>
                    <th>User</th>
                    <th>Comment</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->post->title }}</td>
                    <td>{{ $comment->user_name }}</td>
                    <td>{{ $comment->content }}</td>
                    <td>{{ $comment->status }}</td>
                    <td>{{ $comment->created_at->format('d M Y') }}</td>
                    <td>
                        <a href="{{ route('post-comments.edit', $comment->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('post-comments.destroy', $comment->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this comment?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
