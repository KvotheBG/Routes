<!DOCTYPE html>
<html>
<head>
	<title>show</title>
</head>
<body>
	<table style="border:solid">
		<tr>
			<th>
				{{$city->name}}
			</th>
			<th>
				{{$city->speed_limit}}
			</th>
			<th>
				{{$city->distance_km}}
			</th>
			<th><a href="{{route('city.edit', $city->id)}}">EDIT</a></th>
			<th>delete</th>
		</tr>
	</table>
</body>
</html>