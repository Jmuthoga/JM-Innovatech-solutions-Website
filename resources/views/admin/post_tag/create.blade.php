@extends('admin.admin_master')

@section('admin')
<div class="container">
    <h4>Create New Tag</h4>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                   <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('post_tag.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Tag Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter tag name" required>
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" class="form-control" placeholder="Enter tag slug" required>
        </div>

        <button type="submit" class="btn btn-success">Save Tag</button>
        <a href="{{ route('post_tag.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

