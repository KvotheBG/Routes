@extends('layouts.app')

@section('title', 'Manage | Roads')

@section('content')
	<div class="main-text crud-heading">Roads</div>
	@if (Session::has('message'))
		<div class="alert alert-success alert-fade col-md-9 mx-auto" role="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			{!! Session::get('message') !!}
		</div>
	@endif
	<table class="table table-dark col-md-9 mx-auto text-center">
		<thead class="text-success font-weight-bold bg-dark">
			<tr>
				<th>City X</th>
				<th>City Y</th>
				<th>Road type</th>
				<th>Speed limit</th>
				<th>Distance</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		@foreach($roads as $road)
			<tr>
				<td>
					{{ (App\City::find($road->city_x_id))->name }}
				</td>
				<td>
					{{ (App\City::find($road->city_y_id))->name }}
				</td>
				<td>
					<a class="text-white" href="{{ route('road_types.show', $road->road_type_id) }}">
						<?php
						$road_type = App\RoadType::find($road->road_type_id);
						?>
						{{ $road_type->type_name }}
					</a>
				</td>
				<td>{{ $road->speed_limit }} km/h</td>
				<td>{{ $road->distance_km }} km</td>
				<td>
					<a href="{{ route('roads.edit', $road->id) }}" class="text-warning">Update</a>
				</td>
				<td>
					{!! Form::open(['route' => ['roads.destroy', $road->id], 'method' => 'DELETE']) !!}
						{!! Form::submit('Delete', ['class' => 'btn btn-link text-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
		@endforeach
	</table>
	<a href="{{ route('roads.create') }}" class="btn btn-big btn-success">Create</a>
@endsection