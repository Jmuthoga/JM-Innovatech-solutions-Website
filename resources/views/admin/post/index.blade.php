@extends('admin.admin_master')
@section('admin')

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>All Posts</h4>
        <a href="{{ route('post.create') }}" class="btn btn-primary">+ Add New Post</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead>
                <tr class="custom-thead">
                    <th>#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Tags</th>
                    <th>Author</th>
                    <th>Excerpt</th>
                    <th>Image</th>
                    <th>Content</th>
                    <th>Posted On</th>
                    <th width="180">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse($posts as $key => $post)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name ?? 'N/A' }}</td>
                    <td>
                    </td>
                    <td>{{ $post->author }}</td>
                    <td>{{ Str::limit($post->excerpt, 50) }}</td>
                    <td>
                        @if($post->image)
                            <img src="{{ asset($post->image) }}" width="80" class="img-thumbnail">
                        @else
                            <span class="text-muted">No Image</span>
                        @endif
                    </td>
                    <td>{!! Str::limit(strip_tags($post->content), 80) !!}</td>
                    <td>{{ $post->created_at->addHours(3)->format('d M Y, h:i A') }}</td>
                    <td>
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-sm btn-success">View</a>
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('post.destroy', $post->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure to delete this post?')" 
                                    class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="text-center text-muted">No posts found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection

