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
									{{$gas_station->name}}
								</th>
								<th>
									{{$city->name}}
								</th>
								<th>
									{{$gas_station->distance_km}}
								</th>
								<th>
									<a href="{{route('gas_station.edit', $gas_station->id)}}">EDIT</a>
								</th>
							</tr>
						</table>	
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection