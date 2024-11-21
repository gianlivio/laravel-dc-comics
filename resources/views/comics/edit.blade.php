@extends('layouts.app')

@section('content')

    <div class="container py-5">
        <h1 class="py-3">Modifica Fumetto</h1>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title"
                    value="{{ old('title', $comic->title) }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ old('description', $comic->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Poster</label>
                <input type="text" class="form-control" id="thumb" name="thumb"
                    value="{{ old('thumb', $comic->thumb) }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price"
                    value="{{ old('price', $comic->price) }}" required>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series"
                    value="{{ old('series', $comic->series) }}" required>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Riedizione del</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date"
                    value="{{ old('sale_date', $comic->sale_date) }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <select class="form-select" id="type" name="type">
                    <option value="Fumetto" {{ old('type', $comic->type) == 'Fumetto' ? 'selected' : '' }}>Fumetto</option>
                    <option value="Graphic Novel" {{ old('type', $comic->type) == 'Graphic Novel' ? 'selected' : '' }}>
                        Graphic Novel</option>
                </select>
            </div>
            <div class="py-3">
                <button type="submit" class="btn btn-primary">Salva</button>
            </div>
        </form>
    </div>

@endsection
