@extends('layouts.app')

@section('content')
<div class="container single-panel">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-success">Time from A to B</div>
                <div class="card-body bg-light">
                	<table style="border:solid;">
						<tr>
							You need {{ $length }} min.
						</tr>

						{{-- show all cities names --}}

			            @foreach ($paths as $path)
			            <tr>
			                @foreach ($cities as $city)	
								@if ($city->id == $path)
									<ul>
										{{ $city->name }}
									</ul>
								@endif
			            	@endforeach
			            </tr>
            			@endforeach

            			{{-- show all roads names(id) --}}

            			@foreach ($find_roads as $find_road)
			            <tr>
			                @foreach ($roads as $road)	
								@if ($road->id == $find_road)
									<ul>
										{{ $road->id }}
									</ul>
								@endif
			            	@endforeach
			            </tr>
            			@endforeach

						{{-- show all gas station names --}}

            			@foreach ($find_gas_stations as $find_gas_station)
			            <tr>
			                @foreach ($gas_stations as $gas_station)	
								@if ($gas_station->id == $find_gas_station)
									<ul>
										{{ $gas_station->name }}
									</ul>
								@endif
			            	@endforeach
			            </tr>
            			@endforeach
					</table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection