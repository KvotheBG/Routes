<!DOCTYPE html>
<html>
<head>
	<title>show</title>
</head>
<body>
	<table style="border:solid">
		<tr>
			<th>
				{{$gas_station->name}}
			</th>
			<th>
				{{$city->name}}
			</th>
			<th>
				{{$gas_station->distance_km}}
			</th>
			<th><a href="{{route('gas_station.edit', $gas_station->id)}}">EDIT</a></th>
		</tr>
	</table>
</body>
</html>