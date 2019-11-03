@extends('layouts.app')

@section('content')
<<<<<<< Updated upstream
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

=======
	<div class="container">
        <div style="margin-top: 5px;" class="main-text map-result-heading">
            <span class="green_underlined">
                Route
            </span>
        </div>
        <div class="row">
	        <div class="mar-bott col-lg-4 col-md-6 col-10 offset-md-3 offset-lg-0 offset-1">
	        	<img class="mar-bott map-result-img" src="{{ asset('images/map_result.jpg') }}" draggable="false">

	        	<div class="mar-bott map-result-panel bg-dark no-padding col-lg-12 col-md-10 col-12 offset-lg-0 offset-md-1 offset-0">
		        	<div class="time-label text-white d-inline-block">Time</div>
		        	<div class="time-value text-white text-center d-inline-block float-right">
		        		@if ($time < 60)
		        			{{ $time }} min
		        		@elseif ($time % 60 == 0)
		        			{{ $time/60 }} h
		        		@else
		        			{{ floor($time/60) }}h {{ $time%60 }}min
		        		@endif
		        	</div>
		        </div>
	        </div>
	        <div class="mar-bott col-lg-4 col-md-6">
	        	<form class="text-white bg-dark map-result-panel">
	        		<h3 style="padding: 15px 0 18px 0;" class="text-center">Select fuel</h3>
	        		<div class="radio-group">
        				<input type="radio" class="radio" name="fuel" id="1" value="diesel" onchange="filterByFuel(this.value)">
        				<label for="1" class="radio-label">Diesel</label>
	        		</div>
	        		<div class="radio-group">
        				<input type="radio" class="radio" name="fuel" id="2" value="gasoline" onchange="filterByFuel(this.value)">
        				<label for="2" class="radio-label">Gasoline</label>
	        		</div>
	        		<div class="radio-group">
        				<input type="radio" class="radio" name="fuel" id="3" value="gas" onchange="filterByFuel(this.value)">
        				<label for="3" class="radio-label">Gas</label>
	        		</div>
	        		<div class="radio-group">
        				<input type="radio" class="radio" name="fuel" id="4" value="metan" onchange="filterByFuel(this.value)">
        				<label for="4" class="radio-label">Methane</label>
	        		</div>
	        		<hr>
	        		<div class="radio-group">
        				<input type="radio" class="radio" name="fuel" id="5" value="electricity" onchange="filterByFuel(this.value)">
        				<label for="5" class="radio-label">Electricity</label>
	        		</div>
	        	</form>
	        </div>
	        <div class="mar-bott col-lg-4 col-md-6">
	        	<div class="bg-dark map-result-panel text-white">
	        		<h3 style="padding: 15px 0 18px 0;" class="text-center">Gas Stations</h3>
	        		<div id="gas-st-content">
	        			<div class="text-success text-center">*Select the fuel you want</div>
	        		</div>
	        	</div>
	        </div>
	        
        </div>
        
    </div>

	<div class="text-white"><?php var_dump($paths); ?></div>
	<div class="text-white">{{ $time }} min</div>
	<div>
		<pre class="text-white">{{ $cities }}</pre>
	</div>
>>>>>>> Stashed changes
@endsection