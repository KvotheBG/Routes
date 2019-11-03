@extends('layouts.app')
<<<<<<< Updated upstream
@section('title', 'Manage | Road Info')
=======
@section('title', 'Manage | Gas station Info')
>>>>>>> Stashed changes

@section('content')
<div class="container single-panel">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
<<<<<<< Updated upstream
                <div class="card-header bg-dark text-success">
                    <a href="{{ route('gas_stations.index') }}" class="card-header-back"><</a>
                    {{__('auth.Gas_station_info')}}
                </div>
                <div class="card-body bg-light">
                    <div class="info-row col-md-10">
                        <div class="info-name">
                            {{__('auth.name')}}
                        </div>
=======
                <div class="card-header bg-dark text-success">Gas station Info</div>
                <div class="card-body bg-light">
                    <div class="info-row col-md-10">
                        <div class="info-name">Name</div>
>>>>>>> Stashed changes
                        <div class="info-value">
                            {{ $gas_station->name }}
                        </div>
                    </div>
                    <div class="info-row col-md-10">
<<<<<<< Updated upstream
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
=======
                        <div class="info-name">City</div>
                        <div class="info-value">
                            {{ $gas_station->city->name }}
                        </div>
                    </div>
                    @if ($gas_station->road_id)
                    <div class="info-row col-md-10">
                        <div class="info-name">Road id</div>
                        <div class="info-value">
                            {{ $gas_station->road_id }}
                        </div>
                    </div>
                    @endif

                    @if ($gas_station->distance_to_the_city)
                    <div class="info-row col-md-10">
                        <div class="info-name">Distance to city</div>
                        <div class="info-value">
                            {{ $gas_station->distance_to_the_city }} km
                        </div>
                    </div>
                    @endif

                    @if ($gas_station->diesel_price)
                    <div class="info-row col-md-10">
                        <div class="info-name">Diesel price</div>
>>>>>>> Stashed changes
                        <div class="info-value">
                            {{ $gas_station->diesel_price }}
                        </div>
                    </div>
<<<<<<< Updated upstream
                    <div class="info-row col-md-10">
                        <div class="info-name">
                            {{__('auth.Gasoline')}}
                        </div>
=======
                    @endif
                    
                    @if ($gas_station->gasoline_price)
                    <div class="info-row col-md-10">
                        <div class="info-name">Gasoline price</div>
>>>>>>> Stashed changes
                        <div class="info-value">
                            {{ $gas_station->gasoline_price }}
                        </div>
                    </div>
<<<<<<< Updated upstream
                    <div class="info-row col-md-10">
                        <div class="info-name">
                            {{__('auth.Gas')}}
                        </div>
=======
                    @endif

                    @if ($gas_station->gas_price)
                    <div class="info-row col-md-10">
                        <div class="info-name">Gas price</div>
>>>>>>> Stashed changes
                        <div class="info-value">
                            {{ $gas_station->gas_price }}
                        </div>
                    </div>
<<<<<<< Updated upstream
                    <div class="info-row col-md-10">
                        <div class="info-name">
                            {{__('auth.Methane')}}
                        </div>
=======
                    @endif

                    @if ($gas_station->metan_price)
                    <div class="info-row col-md-10">
                        <div class="info-name">Methane price</div>
>>>>>>> Stashed changes
                        <div class="info-value">
                            {{ $gas_station->metan_price }}
                        </div>
                    </div>
<<<<<<< Updated upstream
                    <div class="info-row col-md-10">
                        <div class="info-name">
                            {{__('auth.Electricity')}}
                        </div>
=======
                    @endif

                    @if ($gas_station->electricity_price)
                    <div class="info-row col-md-10">
                        <div class="info-name">Electricity price</div>
>>>>>>> Stashed changes
                        <div class="info-value">
                            {{ $gas_station->electricity_price }}
                        </div>
                    </div>
<<<<<<< Updated upstream
=======
                    @endif
>>>>>>> Stashed changes
                </div>
            </div>
        </div>
    </div>
</div>
@endsection