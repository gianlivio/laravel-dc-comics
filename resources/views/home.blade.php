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
            <h1 class="fw-bold">Welcome to DC Comics</h1>
            <p>Your favorite comics all in one place.</p>
            <a href="{{ url('/comics') }}" class="btn btn-primary mt-3">View Comics</a>
        </div>
    </div>
@endsection