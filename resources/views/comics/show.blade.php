@extends('layouts.app')

@section('content')
<div class="video-container-show">
    <!-- Video di sfondo -->
    <video autoplay loop muted playsinline class="video-bg-show">
        <source src="{{ Vite::asset('resources/videos/superheroes3.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Contenuto fumetto in primo piano -->
    <div class="comic-content-container">
        <div class="comic-image-wrapper">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="comic-image">
        </div>
        <div class="comic-details-wrapper">
            <h1 class="comic-title">{{ $comic->title }}</h1>
            <p class="comic-description">{{ $comic->description }}</p>
            <ul class="comic-details-list">
                <li><strong>Price:</strong> ${{ $comic->price }}</li>
                <li><strong>Series:</strong> {{ $comic->series }}</li>
                <li><strong>Release Date:</strong> {{ $comic->sale_date }}</li>
                <li><strong>Type:</strong> {{ $comic->type }}</li>
            </ul>
            <!-- Pulsanti CRUD -->
            <div class="crud-buttons mt-4">
                <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning me-2">Edit</a>
                <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ route('comics.index') }}" class="btn btn-secondary ms-2">Back to List</a>
            </div>
        </div>
    </div>
</div>
@endsection