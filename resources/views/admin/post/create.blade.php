@extends('admin.admin_master')
@section('admin')

@push('styles')
  <!-- Summernote CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
  <style>
    .note-editor.note-frame .note-editing-area .note-editable { min-height: 250px; }
    .note-popover, .note-toolbar { z-index: 1055 !important; }
  </style>
@endpush

<div class="container py-5">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
        <div class="card-header bg-primary text-white py-4 text-center">
            <h2 class="mb-0 fw-bold">
                <i class="bi bi-briefcase-fill me-2"></i> Add New Career
            </h2>
        </div>

        <div class="card-body p-5">
            <form action="{{ route('admin.careers.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                @csrf

                <div class="row g-5">
                    <!-- Left Column: Job Details -->
                    <div class="col-lg-7">
                        <h5 class="section-title mb-4">Job Details</h5>

                        <div class="mb-3">
                            <label for="title" class="form-label fw-semibold">Job Title</label>
                            <input type="text" name="title" id="title" class="form-control elegant-input" placeholder="e.g. Software Engineer" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label fw-semibold">Job Description</label>
                            <textarea name="description" id="description" class="form-control summernote">{{ old('description') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="responsibilities" class="form-label fw-semibold">Responsibilities & Requirements</label>
                            <textarea name="responsibilities" id="responsibilities" class="form-control summernote">{{ old('responsibilities') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="instructions" class="form-label fw-semibold">Application Instructions</label>
                            <textarea name="instructions" id="instructions" class="form-control summernote">{{ old('instructions') }}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="deadline" class="form-label fw-semibold">Application Deadline</label>
                                <input type="date" name="deadline" id="deadline" class="form-control elegant-input" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="poster" class="form-label fw-semibold">Upload Poster (Optional)</label>
                                <input type="file" name="poster" id="poster" class="form-control elegant-input">
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Interview Questions -->
                    <div class="col-lg-5">
                        <h5 class="section-title text-primary mb-4">Interview Questions</h5>
                        <div class="questions-box rounded-4 p-4">
                            <div id="questions-wrapper">
                                <div class="question-group rounded-3 p-3 mb-3">
                                    <label class="form-label fw-semibold">Question</label>
                                    <input type="text" name="questions[]" class="form-control mb-2 elegant-input" placeholder="Enter a question" required>
                                    <label class="form-label fw-semibold">Answer</label>
                                    <input type="text" name="answers[]" class="form-control elegant-input" placeholder="Provide the answer" required>
                                </div>
                            </div>
                            <button type="button" id="add-question" class="btn btn-outline-primary w-100 fw-semibold">
                                <i class="bi bi-plus-circle me-1"></i> Add Another Question
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Submit -->
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-success btn-lg px-5 fw-semibold save-btn">
                        <i class="bi bi-save-fill me-2"></i> Save Career
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- Summernote JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>

  <script>
    $(function () {
      if (!$.fn.summernote) { console.error('Summernote not loaded'); return; }

      $('.summernote').summernote({
        height: 250,
        placeholder: 'Write here...',
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'italic', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['insert', ['link', 'picture']],
          ['view', ['fullscreen', 'codeview']]
        ]
      });

      // Add Question button
      $('#add-question').on('click', function () {
        let wrapper = $('#questions-wrapper');
        let div = $(`
          <div class="question-group rounded-3 p-3 mb-3">
            <label class="form-label fw-semibold">Question</label>
            <input type="text" name="questions[]" class="form-control mb-2 elegant-input" placeholder="Enter a question" required>
            <label class="form-label fw-semibold">Answer</label>
            <input type="text" name="answers[]" class="form-control elegant-input" placeholder="Provide the answer" required>
          </div>
        `);
        wrapper.append(div);
      });
    });
  </script>
@endpush

@endsection



