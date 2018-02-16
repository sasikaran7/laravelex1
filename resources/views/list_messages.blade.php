@extends('layouts.app')

@section('content')
	<h1>View All Messages</h1>
	@if(count($messages) > 0)
		@foreach($messages as $message)
			<ul class="list-group">
				<li class="list-group-item">Name: {{$message->name}}</li>
				<li class="list-group-item">E-Mail: {{$message->email}}</li>
				<li class="list-group-item">Message: {{$message->message}}</li>

			</ul>
		@endforeach
	@endif
	
@endsection

@section('sidebar')
	@parent
 <p>This is side bar test</p>
@endsection
