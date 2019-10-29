@extends('layouts.app')

@section('content')
	<h1 class="text-white">Result</h1>
	<div>
		<table style="border:solid;">
			<tr>
				You need {{ $length }} min.
			</tr>
            @foreach ($paths as $path)
                <tr>
                	@foreach ($cities as $city)	
						@if ($city->id == $path)
							<th>
								{{ $city->name }}
							</th>
						@endif
            		@endforeach
                </tr>
            @endforeach
		</table>
	</div>
@endsection