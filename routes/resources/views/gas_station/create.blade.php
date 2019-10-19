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
                        <h3>Create gas station</h3>
                        {!! Form::open(['action' => 'GasStationController@store']) !!}
                        {!! Form::text('gas_station_name', null, ['placeholder'=>'Name'] ) !!}
                        {!! Form::select('road', $road_id, null,['placeholder'=>'-Road-']) !!}
                        {!! Form::select('city', $plucked, null,['placeholder'=>'-City-']) !!}
						{!! Form::number('distance_to_city', null, ['placeholder'=>'distance to the city', 'id' => 'city_id']) !!}
                        {!! Form::number('diesel_price', null, ['placeholder'=>'diesel price']) !!}
                        {!! Form::number('gasoline_price', null, ['placeholder'=>'gasoline price']) !!}
                        {!! Form::number('gas_price', null, ['placeholder'=>'gas price']) !!}
                        {!! Form::number('electricity_price', null, ['placeholder'=>'electricity price']) !!}
                        {!! Form::number('metan_price', null, ['placeholder'=>'metan price']) !!}
						{!! Form::submit('create') !!}
						{!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection