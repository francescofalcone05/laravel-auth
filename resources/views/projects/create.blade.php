@extends('layouts.app')

@section('content')
    <h1>Aggiungi un nuovo progetto</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div>
            <label for="titolo">Titolo:</label>
            <input type="text" id="titolo" name="titolo" value="{{ old('titolo') }}">
            @error('titolo')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="gruppo">Gruppo:</label>
            <input type="checkbox" id="gruppo" name="gruppo" value="{{ old('gruppo') }}">
            @error('gruppo')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="descrizione">Descrizione</label>
            <input type="text" id="descrizione" name="descrizione" value="{{ old('descrizione') }}">
            @error('descrizione')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="date">Data:</label>
            <input type="text" id="date" name="date" value="{{ old('date') }}">
            @error('date')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <!-- Aggiungi qui altri campi del form se necessario -->
        <button type="submit">Aggiungi progetto</button>
    </form>
    <a href="/projects/index">Torna alla lista dei progetti</a>
@endsection