@extends('admin.admin_master')
@section('admin')

@push('styles')
  <!-- Select2 CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/css/select2.min.css" rel="stylesheet">
  <!-- Summernote CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
  <style>
    .note-editor.note-frame .note-editing-area .note-editable { min-height: 250px; }
    .note-popover, .note-toolbar { z-index: 1055 !important; }
  </style>
@endpush

<div class="container">
  <h4>Edit Post</h4>

  <form method="POST" action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label>Post Title</label>
      <input type="text" name="title" value="{{ old('title', $post->title) }}" class="form-control">
      @error('title') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
      <label>Category</label>
      <select name="category_id" class="form-control select2">
        <option value="">-- Select Category --</option>
        @foreach($categories as $cat)
          <option value="{{ $cat->id }}" {{ $post->category_id == $cat->id ? 'selected' : '' }}>
            {{ $cat->name }}
          </option>
        @endforeach
      </select>
      @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
    </div>




    <div class="mb-3">
      <label>Excerpt</label>
      <textarea name="excerpt" class="form-control">{{ old('excerpt', $post->excerpt) }}</textarea>
      @error('excerpt') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
      <label>Post Image</label>
      <input type="file" name="image" class="form-control" id="image">

      @if($post->image)
        <div class="mt-2">
          <p class="mb-1 text-muted">Current Image:</p>
          <img src="{{ asset($post->image) }}" style="max-height:200px;" class="border rounded">
        </div>
      @endif

      <img id="preview-image" src="#" style="display:none; margin-top:10px; max-height:200px;" class="border rounded">
    </div>

    <div class="mb-3">
      <label>Post Content</label>
      <textarea name="content" id="summernote" class="form-control">{{ old('content', $post->content) }}</textarea>
      @error('content') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <button class="btn btn-success">💾 Update Post</button>
  </form>
</div>

@push('scripts')
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- Select2 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/js/select2.min.js"></script>
  <!-- Summernote -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>

  <script>
    $(function () {
      // Image preview
      $('#image').on('change', function(){
        const file = this.files && this.files[0];
        if (!file) return;
        const reader = new FileReader();
        reader.onload = e => {
          $('#preview-image').attr('src', e.target.result).show();
        };
        reader.readAsDataURL(file);
      });

      // Select2
      $('.select2').select2({ width: '100%' });

      // Summernote FULL toolbar
      $('#summernote').summernote({
        height: 450,
        placeholder: 'Edit your post content...',
        toolbar: [
          ['style', ['style']],
          ['font', ['fontname', 'fontsize', 'fontsizeunit']],
          ['fontstyle', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph', 'height']],
          ['insert', ['link', 'picture', 'video', 'table', 'hr']],
          ['misc', ['undo', 'redo']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ],
        fontNames: ['Arial', 'Verdana', 'Times New Roman', 'Courier New', 'Roboto', 'Tahoma', 'Comic Sans MS'],
      });
    });
  </script>
@endpush

@endsection

