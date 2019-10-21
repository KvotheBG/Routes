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
                        	{!! Form::model($gas_station, ['method' => 'PUT', 'route' => ['gas_station.update', $gas_station->id]]) !!}

                            {!! Form::text('gas_station_name', $gas_station->name ) !!}
                            {!! Form::select('road', $road_id, $gas_station->road_id) !!}
                            {!! Form::select('city', $plucked, $city->id) !!}
                            {!! Form::text('distance_to_the_city', $gas_station->distance_to_the_city) !!}
                            {!! Form::text('diesel_price', $gas_station->diesel_price) !!}
                            {!! Form::text('gasoline_price', $gas_station->gasoline_price) !!}
                            {!! Form::text('gas_price', $gas_station->gas_price) !!}
                            {!! Form::text('electricity_price', $gas_station->electricity_price) !!}
                            {!! Form::text('metan_price', $gas_station->metan_price) !!}
    						{!! Form::submit('change') !!}
							{!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection