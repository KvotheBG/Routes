@extends('layouts.app')
@section('title', 'Manage | Road Info')

@section('content')
<div class="container single-panel">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-dark text-success">{{__('auth.Road_Info')}}</div>
                <div class="card-body bg-light">
                    <div class="info-row">
                        <div class="info-name">{{__('auth.City_A')}}</div>
                        <div class="info-value">
                            <?php
                            $city_x = App\City::find($road->city_x_id);
                            ?>
                            {{ $city_x->name }}
                        </div>
                    </div>
                    <div class="info-row">
                        <div class="info-name">{{__('auth.City_B')}}</div>
                        <div class="info-value">
                            <?php
                            $city_y = App\City::find($road->city_y_id);
                            ?>
                            {{ $city_y->name }}
                        </div>
                    </div>
                    <div class="info-row">
                        <div class="info-name">{{__('auth.Road_type')}}</div>
                        <div class="info-value">
                            <?php
                            $road_type = App\RoadType::find($road->road_type_id);
                            ?>
                            {{ $road_type->type_name }}
                        </div>
                    </div>
                    <div class="info-row">
                        <div class="info-name">{{__('auth.Speed_limit')}}</div>
                        <div class="info-value">{{ $road->speed_limit }} km/h</div>
                    </div>
                    <div class="info-row">
                        <div class="info-name">{{__('auth.Distance')}}</div>
                        <div class="info-value">{{ $road->distance_km }} km</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection