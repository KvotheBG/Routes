@extends('layouts.app')
@section('title', 'Manage | Edit road type')

@section('content')
<div class="container single-panel">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-dark text-success">
                    <a href="{{ route('road_types.index') }}" class="card-header-back"><</a>
                    Edit road type
                </div>
                <div class="card-body bg-light">
                    {!! Form::model($road_type, ['method' => 'PUT', 'route' => ['road_types.update', $road_type->id]]) !!}   
                        <div class="form-group">
                            {!! Form::label('type_name', 'Road type') !!}
                            {!! Form::text('type_name', $road_type->type_name, ['class' => 'form-control']) !!}
                        </div>
                        @if($errors->has('type_name'))
                            <div class="alert alert-error alert-danger">
                                <ul>
                                    <li>{{ $errors->first('type_name') }}</li>
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            {!! Form::label('delay_factor', 'Delay factor') !!}
                            {!! Form::text('delay_factor', $road_type->delay_factor, ['class' => 'form-control']) !!}
                        </div>
                        @if($errors->has('delay_factor'))
                            <div class="alert alert-error alert-danger">
                                <ul>
                                    <li>{{ $errors->first('delay_factor') }}</li>
                                </ul>
                            </div>
                        @endif

                        {!! Form::submit('Edit', ['class' => 'btn btn-normal btn-success float-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection