@extends('layouts.app')

@section('content')
	<div style="width: 80%" class="mx-auto">

		<div class="card mb-3">
			<img src="{{ $project->img }}" class="card-img-top" alt="...">

			<div class="card-body">

				<h5 class="card-title">Progetto: {{ $project['name_project'] }}</h5>
				<p class="card-text">Descrizione: {{ $project['description'] }}</p>
				<p class="card-text"><small class="text-body-secondary">{{ $project->type->name }}</small></p>
				<a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-primary">Edit</a>
			</div>

		</div>
		<a href="{{ route('admin.projects.index') }}">Torna alla lista progetti</a>
	@endsection
