@extends('admin.admin_master')
@section('admin')

<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">All Adverts</h4>
        <a href="{{ route('adverts.create') }}" class="btn btn-primary btn-sm">+ Add New Advert</a>
    </div>

    <div class="card-body">
        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($adverts->count() > 0)
        <table class="table table-bordered table-striped">
            <thead style="background-color: #343a40; color: #fff;">
                <tr>
                    <th>#</th>
                    <th style="color: #fff; font-weight: bold;">Title</th>
                    <th style="color: #fff; font-weight: bold;">Type</th>
                    <th style="color: #fff; font-weight: bold;">Image</th>
                    <th class="text-center" style="color: #fff; font-weight: bold;">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($adverts as $index => $advert)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $advert->title }}</td>
                    <td>{{ ucfirst($advert->type) }}</td>
                    <td>
                        <img src="{{ asset('uploads/adverts/'.$advert->image) }}" alt="{{ $advert->title }}" width="100">
                    </td>
                    <td class="text-center">
                        <a href="{{ route('adverts.edit', $advert->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('adverts.destroy', $advert->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this advert?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <p class="text-muted">No adverts found. Click "Add New Advert" to create one.</p>
        @endif
    </div>
</div>

@endsection
