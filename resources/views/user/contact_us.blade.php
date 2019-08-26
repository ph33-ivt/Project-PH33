@extends('layouts.app')
@section('content')
@if(session('success'))
<p style="color: green;">{{session('success')}}</p>
@endif
<h1>Contact us</h1>
	<form action="{{route('send-contact')}}" method="POST">
		@csrf
		<label>Email:</label>
		<input type="text" name="email">
		<label>Content</label>
		<textarea name="content"></textarea>
		<button type="submit">Submit</button>
	</form>
@endsection