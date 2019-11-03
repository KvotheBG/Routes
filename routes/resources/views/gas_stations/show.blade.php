@extends('layouts.app')
@section('title', 'Manage | Road Info')

@section('content')
<div class="container single-panel">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-dark text-success">
                    <a href="{{ route('gas_stations.index') }}" class="card-header-back"><</a>
                    {{__('auth.Gas_station_info')}}
                </div>
                <div class="card-body bg-light">
                    <div class="info-row col-md-10">
                        <div class="info-name">
                            {{__('auth.name')}}
                        </div>
                        <div class="info-value">
                            {{ $gas_station->name }}
                        </div>
                    </div>
                    <div class="info-row col-md-10">
                        <div class="info-name">
                            {{__('auth.City')}}
                        </div>
                        <div class="info-value">
                            {{ $city }}
                        </div>
                    </div>
                    <div class="info-row col-md-10">
                        <div class="info-name">
                            {{__('auth.Road')}}
                        </div>
                        <div class="info-value">
                            {{ $gas_station->id }}
                        </div>
                    </div>
                    <div class="info-row col-md-10">
                        <div class="info-name">{{__('auth.Distance_to_the_city')}}</div>
                        <div class="info-value">{{ $gas_station->distance_to_the_city }} km</div>
                    </div>
                    <div class="info-row col-md-10">
                        <div class="info-name">
                            {{__('auth.Diesel')}}
                        </div>
                        <div class="info-value">
                            {{ $gas_station->diesel_price }}
                        </div>
                    </div>
                    <div class="info-row col-md-10">
                        <div class="info-name">
                            {{__('auth.Gasoline')}}
                        </div>
                        <div class="info-value">
                            {{ $gas_station->gasoline_price }}
                        </div>
                    </div>
                    <div class="info-row col-md-10">
                        <div class="info-name">
                            {{__('auth.Gas')}}
                        </div>
                        <div class="info-value">
                            {{ $gas_station->gas_price }}
                        </div>
                    </div>
                    <div class="info-row col-md-10">
                        <div class="info-name">
                            {{__('auth.Methane')}}
                        </div>
                        <div class="info-value">
                            {{ $gas_station->metan_price }}
                        </div>
                    </div>
                    <div class="info-row col-md-10">
                        <div class="info-name">
                            {{__('auth.Electricity')}}
                        </div>
                        <div class="info-value">
                            {{ $gas_station->electricity_price }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection