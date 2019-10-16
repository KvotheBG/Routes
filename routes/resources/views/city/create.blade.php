<!DOCTYPE html>
<html>
<head>
	<title>create</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<h1>Create</h1>
	<div>

	{!! Form::open(['action' => 'CityController@store']) !!}
	   	{!! Form::text('city_name', null, ['placeholder'=>'name'] ) !!}
	   	{!! Form::number('speed_limit', null, ['placeholder'=>'speed limit']) !!}
	    {!! Form::number('distance_km', null, ['placeholder'=>'distance']) !!}
	    {!! Form::submit('create') !!}
	{!! Form::close() !!}
	</div>
</body>
</html>