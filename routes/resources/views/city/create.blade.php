@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <h3>Manage</h3>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        {!! Form::open(['action' => 'CityController@store']) !!}
					   	{!! Form::text('name', null, ['placeholder'=>'name'] ) !!}
					   	{!! Form::number('speed_limit', null, ['placeholder'=>'speed limit']) !!}
					    {!! Form::number('distance', null, ['placeholder'=>'distance']) !!}
					    {!! Form::submit('create') !!}
						{!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection