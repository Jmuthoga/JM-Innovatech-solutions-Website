@extends('admin.admin_master')
@section('admin')

<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary mb-0">
            <i class="bi bi-briefcase-fill me-2"></i> Careers Management
        </h2>
        <a href="{{ route('admin.careers.create') }}" class="btn btn-primary shadow-sm">
            <i class="bi bi-plus-circle me-1"></i> Add New Career
        </a>
    </div>

    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table align-middle table-hover table-bordered mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Responsibilities</th>
                            <th>Instructions</th>
                            <th>Deadline</th>
                            <th>Poster</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($careers as $career)
                            <tr>
                                <!-- Title -->
                                <td class="fw-semibold">{{ $career->title }}</td>

                                <!-- Description -->
                                <td style="max-width: 220px;">
                                    <div class="text-truncate" title="{{ strip_tags($career->description) }}">
                                        {!! Str::limit(strip_tags($career->description), 100) !!}
                                    </div>
                                </td>

                                <!-- Responsibilities -->
                                <td style="max-width: 220px;">
                                    <div class="text-truncate" title="{{ strip_tags($career->responsibilities) }}">
                                        {!! Str::limit(strip_tags($career->responsibilities), 100) !!}
                                    </div>
                                </td>

                                <!-- Instructions -->
                                <td style="max-width: 220px;">
                                    <div class="text-truncate" title="{{ strip_tags($career->instructions) }}">
                                        {!! Str::limit(strip_tags($career->instructions), 100) !!}
                                    </div>
                                </td>

                                <!-- Deadline -->
                                <td>{{ \Carbon\Carbon::parse($career->deadline)->format('M d, Y') }}</td>

                                <!-- Poster -->
                                <td>
                                    @if($career->poster)
                                        <a href="{{ asset('storage/'.$career->poster) }}" target="_blank" class="btn btn-sm btn-outline-info">
                                            <i class="bi bi-image"></i> View
                                        </a>
                                    @else
                                        <span class="text-muted">—</span>
                                    @endif
                                </td>

                                <!-- Status -->
                                <td>
                                    <span class="badge rounded-pill {{ $career->status == 'Open' ? 'bg-success' : 'bg-danger' }}">
                                        {{ $career->status }}
                                    </span>
                                </td>

                                <!-- Actions -->
                                <td class="text-center">
                                    <a href="{{ route('admin.careers.edit', $career->id) }}" class="btn btn-sm btn-warning me-1">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('admin.careers.destroy', $career->id) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this career?')">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center text-muted">No careers available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
