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
									{{$city->name}}
								</th>
								<th>
									{{$city->speed_limit}}
								</th>
								<th>
									{{$city->distance_km}}
								</th>
								<th><a href="{{route('city.edit', $city->id)}}">EDIT</a></th>
								<th>delete</th>
							</tr>
						</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection