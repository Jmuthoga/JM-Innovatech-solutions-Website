@extends('layouts.master_home')

@section('home_content')
<div class="container mt-5">
    <h1>{{ $post->title }}</h1>
    <p><strong>Category:</strong> {{ $post->category }}</p>
    <p><strong>Tags:</strong> </p>
    <p><strong>Author:</strong> {{ $post->author }}</p>
    
    @if($post->image)
        <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="img-fluid my-3">
    @endif

    <p>{{ $post->content }}</p>
</div>
@endsection
