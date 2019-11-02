@extends('layouts.app')
@section('title', 'Manage | Road type Info')

@section('content')
<div class="container single-panel">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-dark text-success">Road type Info</div>
                <div class="card-body bg-light">
                    <div class="info-row col-md-10">
                        <div class="info-name">Type</div>
                        <div class="info-value">{{ $road_type->type_name }}</div>
                    </div>
                    <div class="info-row col-md-10">
                        <div class="info-name">Delay factor</div>
                        <div class="info-value">{{ $road_type->delay_factor }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection