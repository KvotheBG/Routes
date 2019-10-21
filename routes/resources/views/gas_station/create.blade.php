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
                        {!! Form::select('road', $road_id, null,['placeholder'=>'-Road-', 'data-url'=> route('get.city'), 'id'=>'road_id']) !!}
                        {{-- {!! Form::select('city', $plucked, null,['placeholder'=>'-City-', 'id'=>'city_id']) !!} --}}

                                <select   name="city_id" id="city_id">
                                   <option disabled="disabled" selected>
                                       Първо изберете категория 
                                   </option>
                               </select>

						{!! Form::text('distance_to_the_city', null, ['placeholder'=>'distance to the city']) !!}
                        {!! Form::text('diesel_price', null, ['placeholder'=>'diesel price']) !!}
                        {!! Form::text('gasoline_price', null, ['placeholder'=>'gasoline price']) !!}
                        {!! Form::text('gas_price', null, ['placeholder'=>'gas price']) !!}
                        {!! Form::text('electricity_price', null, ['placeholder'=>'electricity price']) !!}
                        {!! Form::text('metan_price', null, ['placeholder'=>'metan price']) !!}
						{!! Form::submit('create') !!}
						{!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection