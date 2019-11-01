@extends('layouts.app')
@section('title', 'Manage | Create road')

@section('content')
<div class="container single-panel">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-dark text-success">
                    <a href="{{ route('roads.index') }}" class="card-header-back"><</a>
                    Add road
                </div>
                <div class="card-body bg-light">
                    {!! Form::open(['route' => ['roads.store']]) !!}
                        <div class="form-group">
                            {!! Form::label('city_x_id', 'City X') !!}
                            {!! Form::select('city_x_id', $cities_arr, old('city_x_id'), ['class' => 'form-control']) !!}
                        </div>
                        @if($errors->has('city_x_id'))
                            <div class="alert alert-error alert-danger">
                                <ul>
                                    <li>{{ $errors->first('city_x_id') }}</li>
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            {!! Form::label('city_y_id', 'City Y') !!}
                            {!! Form::select('city_y_id', $cities_arr, old('city_y_id'), ['class' => 'form-control']) !!}
                        </div>
                        @if($errors->has('city_y_id'))
                            <div class="alert alert-error alert-danger">
                                <ul>
                                    <li>{{ $errors->first('city_y_id') }}</li>
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            {!! Form::label('road_type_id', 'Road type') !!}
                            {!! Form::select('road_type_id', $road_types_arr, old('road_type_id'), ['class' => 'form-control']) !!}
                        </div>
                        @if($errors->has('road_type_id'))
                            <div class="alert alert-error alert-danger">
                                <ul>
                                    <li>{{ $errors->first('road_type_id') }}</li>
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            {!! Form::label('speed_limit', 'Speed limit') !!}
                            {!! Form::number('speed_limit', old('speed_limit'), ['class' => 'form-control']) !!}
                        </div>
                        @if($errors->has('speed_limit'))
                            <div class="alert alert-error alert-danger">
                                <ul>
                                    <li>{{ $errors->first('speed_limit') }}</li>
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            {!! Form::label('distance', 'Distance') !!}
                            {!! Form::number('distance', old('distance'), ['class' => 'form-control']) !!}
                        </div>
                        @if($errors->has('distance'))
                            <div class="alert alert-error alert-danger">
                                <ul>
                                    <li>{{ $errors->first('distance') }}</li>
                                </ul>
                            </div>
                        @endif

                        {!! Form::submit('Create', ['class' => 'btn btn-normal btn-success float-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection