@extends('layouts.app')
@section('content')
	<div>
		@foreach ($projects as $project)
			<h1>Progetto: {{ $project->name_project }}</h1>
			<p>Descrizione: {{ $project->description }}</p>
			<p>Data pubblicazione: {{ $project->date }}</p>
			@if ($project->group == true)
				<p>Progetto svolto in gruppo</p>
			@else
				<p>Progetto non svolto in gruppo</p>
			@endif
			<a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary">more details</a>
		@endforeach
	</div>
@endsection
