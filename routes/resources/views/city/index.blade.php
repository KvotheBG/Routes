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
									Speed limit
								</th>
								<th>
									distance
								</th>
								<th>
									EDIT
								</th>
								<th>
									DELETE
								</th>
							</tr>
							<tr>
								@foreach($cities as $city)
									<tr>
										<th>
											<a href="{{ route('city.show', $city->id)}}">{{ $city->name }}</a>
										</th>
										<th>
											{{ $city->speed_limit }}
										</th>
										<th>
											{{ $city->distance_km }}
										</th>
										<th>
											<a href="{{route('city.edit', $city->id)}}">EDIT</a>
										</th>

										<th>
											<form method="POST" action="{{ route('city.destroy', $city->id) }}">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}
												<button type="submit" class="btn btn-danger">DELETE</button>
											</form>
										</th>
									</tr>
								@endforeach
							</tr>
						</table>
						<a href="{{ route('city.create') }}">Create new</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection