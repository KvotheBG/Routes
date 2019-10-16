<!DOCTYPE html>
<html>
<head>
	<title>cities</title>
</head>
<body>
	<h1>Cities</h1>
	@if(Session::has('message'))
		<div class="bg-success">
			{{ Session::get('message') }}
		</div>
	@endif
	<table style="border:solid">

		<tr>
			<th>
				Name
			</th>
			<th>
				Speed limit
			</th>
			<th>
				distance
			</th>
			<th>
				EDIT
			</th>
			<th>
				DELETE
			</th>
		</tr>
		<tr>
			@foreach($cities as $city)
				<tr>
					<th>
						<a href="{{ route('city.show', $city->id)}}">{{ $city->name }}</a>
					</th>
					<th>
						{{ $city->speed_limit }}
					</th>
					<th>
						{{ $city->distance_km }}
					</th>
					<th>
						EDIT
					</th>

					<th>
						<form method="POST" action="{{ route('city.destroy', $city->id) }}">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<button type="submit" class="btn btn-danger">DELETE</button>
						</form>
					</th>
				</tr>
			@endforeach
		</tr>
	</table>
	<a href="{{ route('city.create') }}">Create new</a>
</body>
</html>