@extends('layouts.app')
@section('title', 'Travel | Map')

@section('content')
<div class="container single-panel">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-success">Time from A to B</div>
                <div class="card-body bg-light">
                	<img src="{{ asset('images/map.png') }}" class="map-img" alt="map img" draggable="false">
                		<div class="form-group map-form-group row">
                			{!! Form::label('city_x', 'Start point', ['class' => 'col-md-5 col-form-label text-md-right']) !!}
                			<div class="col-md-4">
                				{!! Form::select('city_x', $cities_arr, 1, ['class' => 'form-control']) !!}
                			</div>
                		</div>
						<div class="form-group map-form-group row">
							{!! Form::label('city_y', 'End point', ['class' => 'col-md-5 col-form-label text-md-right']) !!}
							<div class="col-md-4">
								{!! Form::select('city_y', $cities_arr, 2, ['class' => 'form-control']) !!}
							</div>
						</div>
						{!! Form::submit('Calculate', ['class' => 'btn btn-success map-btn float-right']) !!}
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection