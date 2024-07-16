@extends('layouts.app')

@section('content')
	<div class="text-center">
		<h1>Aggiungi un nuovo progetto</h1>
		<form action="{{ route('admin.projects.store') }}" method="POST">
			@csrf
			<div class="my-4">
				<label for="name_project">Titolo:</label>
				<input style="width: 20%" type="text" id="name_project" name="name_project" value="{{ old('name_project') }}">
				@error('name_project')
					<div>{{ $message }}</div>
				@enderror
			</div>

			<div class="my-4">
				<label for="description">Descrizione:</label>
				<input style="width: 80%" type="text" id="description" name="description" value="{{ old('description') }}">
				@error('description')
					<div>{{ $message }}</div>
				@enderror
			</div>

			<div class="my-4">
				<label for="img">Immagine:</label>
				<input style="width: 80%" type="text" id="img" name="img" value="{{ old('img') }}">
				@error('img')
					<div>{{ $message }}</div>
				@enderror
			</div>

			<div class="my-4">
				<label for="type_id">Type:</label>
				<select name="type_id" id="type_id">
					@foreach ($types as $type)
						<option value="{{ $type->id }}">{{ $type->name }}</option>
					@endforeach
				</select>
				@error('type_id')
					<div>{{ $message }}</div>
				@enderror
			</div>

			<!-- Aggiungi qui altri campi del form se necessario -->
			<button class="my-4 bg-success" type="submit">Aggiungi progetto</button>
		</form>

		<a class="mt-1" href="{{ route('admin.projects.index') }}">Torna alla lista dei progetti</a>
	</div>
@endsection
