@extends('layouts.app')

@section('content')

<div class="video-container-edit">
    <!-- Video di sfondo -->
    <video autoplay loop muted playsinline class="video-bg-edit">
        <source src="{{ Vite::asset('resources/videos/superheroes4.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Contenuto Modifica Fumetto -->
    <div class="edit-container">
        <h1 class="text-center text-white mb-4">Edit Comic</h1>

        <!-- Visualizzazione della Copertina -->
        <div class="text-center mb-4">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="comic-cover-preview">
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="edit-form">
            @csrf
            @method('PUT')

            <div class="form-box d-flex flex-wrap justify-content-between">
                <div class="form-group mb-3">
                    <label for="title" class="form-label text-white">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title) }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="price" class="form-label text-white">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $comic->price) }}" required>
                </div>
            </div>

            <div class="form-box d-flex flex-wrap justify-content-between">
                <div class="form-group mb-3">
                    <label for="series" class="form-label text-white">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ old('series', $comic->series) }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="sale_date" class="form-label text-white">Release Date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                </div>
            </div>

            <div class="form-box d-flex flex-wrap justify-content-between">
                <div class="form-group mb-3">
                    <label for="type" class="form-label text-white">Type</label>
                    <select class="form-select" id="type" name="type">
                        <option value="Fumetto" {{ old('type', $comic->type) == 'Fumetto' ? 'selected' : '' }}>Comic</option>
                        <option value="Graphic Novel" {{ old('type', $comic->type) == 'Graphic Novel' ? 'selected' : '' }}>Graphic Novel</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="thumb" class="form-label text-white">Poster URL</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="description" class="form-label text-white">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ old('description', $comic->description) }}</textarea>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('comics.index') }}" class="btn btn-outline-light">Back</a>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
</div>

@endsection

