@extends('layouts.app')

@section('content')
    <h1>Aggiungi un nuovo progetto</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div>
            <label for="name_project">Titolo:</label>
            <input type="text" id="name_project" name="name_project" value="{{ old('name_project') }}">
            @error('name_project')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="group">Gruppo:</label>
            <input type="checkbox" id="group" name="group" value="{{ old('group') }}">
            @error('group')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="description">Descrizione</label>
            <input type="text" id="description" name="description" value="{{ old('description') }}">
            @error('description')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="date">Data:</label>
            <input type="date" id="date" name="date" value="{{ old('date') }}">
            @error('date')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <!-- Aggiungi qui altri campi del form se necessario -->
        <button type="submit">Aggiungi progetto</button>
    </form>
    <a href="/projects/index">Torna alla lista dei progetti</a>
@endsection