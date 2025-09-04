@extends('admin.admin_master')
@section('admin')

<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">All Videos</h4>
        <a href="{{ route('videos.create') }}" class="btn btn-primary btn-sm">+ Add New Video</a>
    </div>

    <div class="card-body">
        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($videos->count() > 0)
        <div class="table-responsive">
            <table class="table table-bordered table-striped videos-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>YouTube Link</th>
                        <th>Preview</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($videos as $index => $video)
                        @php
                            // Extract YouTube video ID
                            preg_match("/(?:v=|\/)([0-9A-Za-z_-]{11}).*/", $video->youtube_link, $matches);
                            $videoId = $matches[1] ?? '';
                            // Embed URL with autoplay, muted, loop
                            $embedUrl = $videoId ? "https://www.youtube.com/embed/$videoId?autoplay=1&mute=1&loop=1&playlist=$videoId" : '';
                        @endphp
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <a href="{{ $video->youtube_link }}" target="_blank">{{ $video->youtube_link }}</a>
                            </td>
                            <td>
                                @if($embedUrl)
                                    <iframe width="200" height="120"
                                        src="{{ $embedUrl }}"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen
                                        allow="autoplay">
                                    </iframe>
                                @else
                                    <p class="text-muted">Invalid link</p>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('videos.edit', $video->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('videos.destroy', $video->id) }}" method="POST" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this video?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
            <p class="text-muted">No videos found. Click "Add New Video" to create one.</p>
        @endif
    </div>
</div>

{{-- Custom CSS to fix header colors --}}
<style>
.videos-table thead {
    background-color: #343a40 !important;
    color: #ffffff !important;
}
.videos-table thead th {
    color: #ffffff !important;
}
</style>

@endsection



