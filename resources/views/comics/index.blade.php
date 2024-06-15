@extends('layouts.app')

@section('content')
 
    <div class="container">
        <h1>Lista fumetti</h1>

        <div>
          <a href="{{ route('comics.create') }}" class="btn btn-success">Nuovo Fumetto</a>
        </div>
        <table class="table table-bordered table-dark">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($comicsArray as $curComic)
              <tr>
                <th scope="row">{{ $curComic->id }}</th>
                <td>{{ $curComic->title}}</td>
                <td>{{ $curComic->price}}</td>
                <td>{{ $curComic->series}}</td>
                <td>
                    <a  class="btn btn-success" href="{{ route('comics.show', [$curComic->id]) }}">Guarda</a>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
    
@endsection