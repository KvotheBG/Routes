@extends('layouts.app')
@section('title', 'Travel | Home')

@section('content')
    <div class="container">
        <div class="main-text">Find out<br>how long your trip will take.</div>
        <div style="margin-bottom: 50px;" class="row">
        	<div class="col-lg-7">
	        	<img class="home-img col-lg-12" src="{{ asset('images/map_preview.png') }}" draggable="false">
	        </div>
	        <div class="col-lg-5">
        		<ul class="text-white home-ul">
        			<li>
        				<img src="{{ asset('images/1.png') }}" draggable="false">
        				Select start town
        			</li>
        			<li>
        				<img src="{{ asset('images/2.png') }}" draggable="false">
        				Select end town
        			</li>
        			<li>
        				<img src="{{ asset('images/3.png') }}" draggable="false">
        				Press the button
        			</li>
        		</ul>
        	</div>
        </div>
		<div class="main-text">It's so simple!</div>
        <a class="btn btn-lg btn-success btn-try-it" href="{{ route('map') }}">Try it now</a>
    </div>
@endsection