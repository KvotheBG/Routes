@extends('layouts.app')

@section('title', 'Manage | Road types')

@section('content')
	<div class="main-text crud-heading">Road types</div>
	@if (Session::has('message'))
		<div class="alert alert-success alert-fade col-md-8 mx-auto" role="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			{!! Session::get('message') !!}
		</div>
	@endif
	<table class="table table-dark col-md-8 mx-auto text-center">
		<thead class="text-success font-weight-bold bg-dark">
			<tr>
				<th>Type</th>
				<th>Delay factor</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		@foreach($road_types as $road_type)
			<tr>
				<td>
					<a class="text-white" href="{{ route('road_types.show', $road_type->id) }}">{{ $road_type->type_name }}</a>
				</td>
				<td>
					{{ $road_type->delay_factor }}
				</td>	
				<td>
					<a href="{{ route('road_types.edit', $road_type->id) }}" class="text-warning">Update</a>
				</td>
				<td>
					{!! Form::open(['route' => ['road_types.destroy', $road_type->id], 'method' => 'DELETE']) !!}
						{!! Form::submit('Delete', ['class' => 'btn btn-link text-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
		@endforeach
	</table>
	<a href="{{ route('road_types.create') }}" class="btn btn-big btn-success">Create</a>
@endsection