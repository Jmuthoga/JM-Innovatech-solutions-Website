@extends('admin.admin_master')

@section('admin')

<div class="py-12">
    <div class="container">
        <div class="row g-4">

            {{-- Portfolio List --}}
            <div class="col-md-8">
                <div class="row g-4">
                    @foreach ($image as $img)
                        <div class="col-md-6 d-flex mb-4">
                            <div class="card shadow-sm flex-fill d-flex flex-column">
                                <img src="{{ asset($img->image) }}" 
                                     alt="Portfolio Image" 
                                     class="card-img-top" 
                                     style="height:250px; object-fit:cover;">

                                <div class="card-body flex-grow-1 d-flex flex-column">
                                    <p class="mb-1"><strong>Description:</strong></p>
                                    <p class="text-muted flex-grow-1">{{ $img->description }}</p>

                                    <p class="mb-1"><strong>Link:</strong></p>
                                    <p>
                                        <a href="{{ $img->link }}" target="_blank" class="text-primary">
                                            {{ $img->link }}
                                        </a>
                                    </p>

                                    <p class="mb-1"><strong>Category:</strong> 
                                        <span class="badge bg-secondary">{{ $img->category ?? 'Uncategorized' }}</span>
                                    </p>
                                </div>

                                <div class="card-footer bg-light d-flex justify-content-between">
                                    <a href="{{ route('multy.edit', [$img->id]) }}" class="btn btn-sm btn-info">Edit</a>
                                    <a href="{{ route('multy.delete', [$img->id]) }}" 
                                       class="btn btn-sm btn-danger" 
                                       onclick="return confirm('Are you sure?')">Delete</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Add New Portfolio Item --}}
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header">Add Portfolio Item</div>
                    <div class="card-body">
                        <form action="{{ route('store.images') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- Image Upload --}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Multi Image</label>
                                <input type="file" class="form-control" name="image[]" id="exampleInputEmail1" multiple>
                                @error('image')
                                <span class="text-danger"> {{$message}}</span>
                                @enderror
                            </div>

                            {{-- Description --}}
                            <div class="form-group mt-3">
                                <label for="description">Description (for each image)</label>
                                <input type="text" class="form-control" name="description[]" placeholder="Enter description">
                            </div>

                            {{-- Link --}}
                            <div class="form-group mt-3">
                                <label for="link">Link (for each image)</label>
                                <input type="text" class="form-control" name="link[]" placeholder="Enter URL">
                            </div>

                            {{-- Category --}}
                            <div class="form-group mt-3">
                                <label for="category">Category (for each image)</label>
                                <select name="category[]" class="form-control" required>
                                    <option value="">-- Select Category --</option>
                                    <option value="Management Systems">Management Systems</option>
                                    <option value="Websites">Websites</option>
                                    <option value="Recruitment Portals">Recruitment Portals</option>
                                    <option value="eLearning Portals">eLearning Portals</option>
                                    <option value="Mobile Applications">Mobile Applications</option>
                                    <option value="E-commerce Websites">E-commerce Websites</option>
                                    <option value="POS Systems">POS Systems</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Add Image</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection




