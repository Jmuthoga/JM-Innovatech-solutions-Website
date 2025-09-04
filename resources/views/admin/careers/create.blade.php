@extends('admin.admin_master')
@section('admin')

@push('styles')
    <!-- Summernote CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">

    <style>
        /* Summernote Editor */
        .note-editor.note-frame .note-editing-area .note-editable {
            min-height: 250px;
        }
        .note-popover,
        .note-toolbar {
            z-index: 1055 !important;
        }

        /* Custom Inputs */
        .elegant-input {
            border-radius: .6rem;
            padding: .65rem 1rem;
            font-size: 0.95rem;
        }

        /* Sections */
        .section-title {
            border-left: 4px solid #0d6efd;
            padding-left: .75rem;
            font-weight: 600;
            font-size: 1.05rem;
        }

        /* Questions */
        .questions-box {
            background: #f8f9fa;
            border: 1px solid #e4e6ef;
        }
        .question-group {
            background: #ffffff;
            border: 1px solid #dee2e6;
            transition: all 0.2s ease;
        }
        .question-group:hover {
            background: #fdfdfd;
            box-shadow: 0 0 6px rgba(0,0,0,0.05);
        }

        /* Save Button */
        .save-btn {
            transition: all .3s ease-in-out;
        }
        .save-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(25,135,84,.3);
        }
    </style>
@endpush

<div class="container py-5">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
        
        <!-- Header -->
        <div class="card-header bg-gradient text-white py-4 text-center" style="background: linear-gradient(45deg, #0d6efd, #0a58ca);">
            <h2 class="mb-0 fw-bold">
                <i class="bi bi-briefcase-fill me-2"></i> Add New Career
            </h2>
        </div>

        <!-- Body -->
        <div class="card-body p-5">
            <form action="{{ route('admin.careers.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                @csrf

                <div class="row g-5">
                    
                    <!-- Left Column: Job Details -->
                    <div class="col-lg-7">
                        <h5 class="section-title mb-4">Job Details</h5>

                        <!-- Job Title -->
                        <div class="mb-3">
                            <label for="title" class="form-label fw-semibold">Job Title</label>
                            <input type="text" name="title" id="title" class="form-control elegant-input" placeholder="e.g. Software Engineer" required>
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label fw-semibold">Job Description</label>
                            <textarea name="description" id="description" class="form-control summernote">{{ old('description') }}</textarea>
                        </div>

                        <!-- Responsibilities -->
                        <div class="mb-3">
                            <label for="responsibilities" class="form-label fw-semibold">Responsibilities & Requirements</label>
                            <textarea name="responsibilities" id="responsibilities" class="form-control summernote">{{ old('responsibilities') }}</textarea>
                        </div>

                        <!-- Instructions -->
                        <div class="mb-3">
                            <label for="instructions" class="form-label fw-semibold">Application Instructions</label>
                            <textarea name="instructions" id="instructions" class="form-control summernote">{{ old('instructions') }}</textarea>
                        </div>

                        <!-- Deadline & Poster -->
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
                                    <span class="badge bg-primary mb-2"><i class="bi bi-question-circle"></i> Question</span>
                                    <input type="text" name="questions[]" class="form-control mb-3 elegant-input" placeholder="Enter a question" required>
                                    <span class="badge bg-success mb-2"><i class="bi bi-check2-circle"></i> Answer</span>
                                    <input type="text" name="answers[]" class="form-control elegant-input" placeholder="Provide the answer" required>
                                </div>
                            </div>

                            <button type="button" id="add-question" class="btn btn-outline-primary w-100 fw-semibold mt-3">
                                <i class="bi bi-plus-circle me-1"></i> Add Another Question
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
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
            // Summernote Init
            if ($.fn.summernote) {
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
            }

            // Add Interview Question
            $('#add-question').on('click', function () {
                const questionGroup = `
                    <div class="question-group rounded-3 p-3 mb-3">
                        <span class="badge bg-primary mb-2"><i class="bi bi-question-circle"></i> Question</span>
                        <input type="text" name="questions[]" class="form-control mb-3 elegant-input" placeholder="Enter a question" required>
                        <span class="badge bg-success mb-2"><i class="bi bi-check2-circle"></i> Answer</span>
                        <input type="text" name="answers[]" class="form-control elegant-input" placeholder="Provide the answer" required>
                    </div>
                `;
                $('#questions-wrapper').append(questionGroup);
            });
        });
    </script>
@endpush

@endsection



