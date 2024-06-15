@extends ('layouts.app')

@section('content')

<div class="container py-5">

    <h1>
        Dettagli: {{ $comic->title }}
    </h1>
    <img  class="w-25 py-5" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    <dl>
        <dt>Dettagli</dt>
        <dd>{{ $comic->description }}</dd>
        <dd>{{ $comic->price }}</dd>
        <dd>{{ $comic->series }}</dd>
        <dd>{{ $comic->sale_date }}</dd>
        <dd>{{ $comic->type }}</dd>

    </dl>

</div>

@endsection