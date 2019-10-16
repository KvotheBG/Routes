<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
     </ul>
	<div>
		{!! Form::model($city, ['method' => 'PUT', 'route' => ['city.update', $city->id]]) !!}
    	{!! Form::text('city_name', $city->name ) !!}
    	{!! Form::number('speed_limit', $city->speed_limit) !!}
    	{!! Form::number('distance_km', $city->distance_km) !!}
    	{!! Form::submit('change') !!}
		{!! Form::close() !!}
	</div>
	
</body>
</html>