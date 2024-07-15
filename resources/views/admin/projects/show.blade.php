@extends('layouts.app')

@section('content')
	<div style="width: 80%" class="mx-auto">

		<div class="card mb-3">
			<img src="..." class="card-img-top" alt="...">

			<div class="card-body">

				<h5 class="card-title">Progetto: {{ $project['name_project'] }}</h5>
				<p class="card-text">Descrizione: {{ $project['description'] }}</p>
				@if ($project->group == true)
					<p>Il progetto è stato fatto in gruppo</p>
				@endif
				<p class="card-text"><small class="text-body-secondary">{{ $project->type->name }}</small></p>
				{{-- <p class="card-text"><small class="text-body-secondary">{{ $project->type }}</small></p>
				<i class="{{ $project->type }}"></i> --}}

			</div>

		</div>
		<a href="/">Torna alla home</a>
	@endsection
