@extends('layouts.app')

@section('content')
	<h1 class="text-white">Map</h1>

	<form method="GET" action="{{ route('result') }}">
		{{ csrf_field() }}
		{{ method_field('POST')}}

		<select name="city_x" >
			@foreach($cities as $city)
			<option value="{{$city->id}}">{{$city->name}}</option>
			@endforeach
		</select>
		<select name="city_y" >
			@foreach($cities as $city)
			<option value="{{$city->id}}">{{$city->name}}</option>
			@endforeach
		</select>
		<input type="submit" name="submit" value="Find">
	</form>

@endsection