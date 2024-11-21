@extends('layouts.app')

@section('content')
    <!-- Video di sfondo per l'intero index -->
    <div class="video-container-index">
        <video autoplay loop muted playsinline class="video-bg-index">
            <source src="{{ Vite::asset('resources/videos/superheroes2.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="overlay-content-index text-center text-white">
            <h1 class="fw-bold">Dive into My Comic Book World</h1>
            <p>Iconic titles from my personal comic collection.</p>
        </div>
    </div>

    <!-- Carosello con video di sfondo -->
    <div class="container-fluid py-5 comics-carousel-section position-relative">
        <h2 class="text-center mb-4">Highlights from My Collection</h2>

        <!-- Video di sfondo per il carosello -->
        <div class="video-container-carousel">
            <video autoplay loop muted playsinline class="video-background-car">
                <source src="{{ Vite::asset('resources/videos/sfondocarosello.mp4') }}" type="video/mp4">
            </video>
        </div>

        <!-- Carosello -->
        <div id="comicsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($comicsArray->chunk(4) as $index => $chunk)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <div class="row justify-content-center">
                        @foreach ($chunk as $comic)
                            <div class="col-md-3">
                                <!-- Card div wrapped in an anchor tag to make the entire card clickable -->
                                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="card-link">
                                    <div class="card-comic mb-3">
                                        <img src="{{ $comic->thumb }}" class="card-img-top-comic" alt="{{ $comic->title }}">
                                        <div class="card-body-comic">
                                            <h5 class="card-title-comic">{{ $comic->title }}</h5>
                                            <p class="card-text-comic">Price: ${{ $comic->price }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
            </div>
            <a class="carousel-control-prev" href="#comicsCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#comicsCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
@endsection
