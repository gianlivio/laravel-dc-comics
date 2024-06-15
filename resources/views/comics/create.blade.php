@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('comics.store') }}">
    <div>
        <label for="title">Titolo:</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required>
    </div>
    <div>
        <label for="description">Descrizione:</label>
        <textarea id="description" name="description" required>{{ old('description') }}</textarea>
    </div>
    <div>
        <label for="price">Prezzo:</label>
        <input type="text" id="price" name="price" value="{{ old('price') }}" required>
    </div>
    <div>
        <label for="sale_date">Data di Uscita:</label>
        <input type="date" id="sale_date" name="sale_date" value="{{ old('sale_date') }}" required>
    </div>
    <div>
        <label for="type">Tipologia:</label>
        <select id="type" name="type" required>
            <option value="comic book" {{ old('type') == 'comic book' ? 'selected' : '' }}>Fumetto</option>
            <option value="graphic novel" {{ old('type') == 'graphic novel' ? 'selected' : '' }}>Romanzo Grafico</option>
            <!-- Aggiungi altre tipologie se necessario -->
        </select>
    </div>
    <button type="submit">Aggiungi Fumetto</button>
</form>


@endsection