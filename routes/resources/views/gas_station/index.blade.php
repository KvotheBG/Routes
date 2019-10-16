@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">

                        @if(Session::has('message'))
                            <div class="bg-success">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        
                        <h3>Manage</h3>
                        	<table style="border:solid">
								<tr>
									<th>
										Name
									</th>
									<th>
										City
									</th>
									<th>
										Distance to the city
									</th>
									<th>
										Road number
									</th>
									<th>
										disel_price
									</th>
									<th>
										gasoline_price
									</th>
									<th>
										gas_price
									</th>
									<th>
										electricity_price
									</th>
									<th>
										metan_price
									</th>
									<th>
										Edit
									</th>
									<th>
										Delete
									</th>
								</tr>
									@foreach($gas_stations as $gas_station)
										<tr>
											<th>
												<a href="{{ route('gas_station.show', $gas_station->id)}}">{{ $gas_station->name }}</a>
											</th>
											<th>
												@foreach($cities as $city)
													@if($gas_station->city_id == $city->id)
														{{ $city->name }}
													@endif
												@endforeach
											</th>
											<th>
												{{ $gas_station->distance_to_the_city }}
											</th>
											<th>
												{{ $gas_station->road_id }}
											</th>
											<th>
												{{ $gas_station->disel_price }}
											</th>
											<th>
												{{ $gas_station->gasoline_price }}
											</th>
											<th>
												{{ $gas_station->gas_price }}
											</th>
											<th>
												{{ $gas_station->electricity_price }}
											</th>
											<th>
												{{ $gas_station->metan_price }}
											</th>
											<th>
												EDIT
											</th>
											<th>
												DELETE
											</th>
										</tr>
									@endforeach
							</table>
						<a href="{{ route('gas_station.create') }}">Create new</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection