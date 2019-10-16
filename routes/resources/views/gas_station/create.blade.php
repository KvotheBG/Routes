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
                        {!! Form::open(['action' => 'GasStationController@store']) !!}
							{!! Form::select('city', $plucked) !!}
							{!! Form::number('distance to city', null, ['placeholder'=>'distance to the city']) !!}
							{!! Form::select('road', $road_id) !!}
							{!! Form::submit('create') !!}
						{!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection