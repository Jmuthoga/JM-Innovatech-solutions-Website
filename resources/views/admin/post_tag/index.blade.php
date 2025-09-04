@extends('admin.admin_master')
@section('admin')

<div class="container mt-4">
    <h4>All Tags</h4>
    <a href="{{ route('post_tag.create') }}" class="btn btn-primary mb-3">Add Tag</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tags as $key => $tag)
            <tr>
                <td>{{ $tags->firstItem() + $key }}</td>
                <td>{{ $tag->name }}</td>
                <td>{{ $tag->slug }}</td>
                <td>{{ $tag->created_at->format('d M Y') }}</td>
                <td>
                    <a href="{{ route('post_tag.edit', $tag->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('post_tag.destroy', $tag->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Delete this tag?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $tags->links() }}
</div>

@endsection
