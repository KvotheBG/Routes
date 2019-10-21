@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
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
									diesel_price
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
							<tr>
								<th>
									{{$gas_station->name}}
								</th>
								<th>
									{{$city->name}}
								</th>
								<th>
									{{ $gas_station->distance_to_the_city }}
								</th>
								<th>
									{{ $gas_station->road_id }}
								</th>
								<th>
									{{ $gas_station->diesel_price }}
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
									<a href="{{route('gas_station.edit', $gas_station->id)}}">EDIT</a>
								</th>
								<th>
									<form method="POST" action="{{ route('gas_station.destroy', $gas_station->id) }}">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button type="submit" class="btn btn-danger">DELETE</button>
									</form>
								</th>
							</tr>
						</table>	
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection