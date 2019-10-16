@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <h3>Manage</h3>
                        {!! Form::model($city, ['method' => 'PUT', 'route' => ['city.update', $city->id]]) !!}
    					{!! Form::text('city_name', $city->name ) !!}
    					{!! Form::number('speed_limit', $city->speed_limit) !!}
	    				{!! Form::number('distance_km', $city->distance_km) !!}
	    				{!! Form::submit('change') !!}
						{!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection