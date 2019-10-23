@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <h3>Manage</h3>
                        <a href="{{route('city.index')}}">City</a>
                        <a href="{{route('gas_station.index')}}">Gas Station</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
