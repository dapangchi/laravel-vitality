@extends('emails.template')
@section('content')
    <h2>Hello, {{ $customer->fullName() }}</h2>

	<div>
		Thanks for your registering to vitality.com.
	</div>
@stop
