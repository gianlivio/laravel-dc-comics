@extends('layouts.app')

@section('content')
    <div class="video-container">
        <!-- Video di sfondo -->
        <video autoplay loop muted playsinline class="video-bg">
            <source src="{{ Vite::asset('resources/videos/superheroes.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Contenuto sopra il video -->
        <div class="overlay-content text-center text-white">
            <h1 class="fw-bold">Discover My Comic Collection</h1>
            <p>A personal showcase of iconic titles and timeless stories.</p>
            <a href="{{ url('/comics') }}" class="btn btn-primary mt-3">Explore the Collection</a>
        </div>
    </div>

    <div class="container text-center py-5">
        <h2 class="mb-4">Why I Love Comics</h2>
        <p class="lead">Comics are more than just stories – they are a world of art, imagination, and culture. Here, you can explore the highlights of my personal collection, featuring legendary characters and unforgettable adventures.</p>
        <a href="{{ url('/comics') }}" class="btn btn-outline-primary mt-3">Browse My Favorites</a>
    </div>
@endsection
