@extends('layouts.app')
@section('content')
	<div class="d-flex justify-content-center flex-wrap">
		@foreach ($projects as $project)
			<div class="card m-2 p-2 text-center" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">Progetto: {{ $project->name_project }}</h5>
					<p>Data pubblicazione: {{ $project->date }}</p>
					<a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary">more details</a>
					<form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
						@method('DELETE')
						@csrf
						<button type="submit" class="btn btn-danger mt-1">Destroy</button>
					</form>
				</div>
			</div>
		@endforeach
	</div>
@endsection
