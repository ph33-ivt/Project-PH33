@extends('layouts.app')
@section('content')
@if(session('success'))
<p style="color: green;">{{session('success')}}</p>
@endif
<h1>Contact us</h1>
	<form action="{{route('send-contact')}}" method="POST">
		@csrf
		<label>Email<b style="color: red;">*</b>:</label>
		<input type="text" name="email" value="{{old('email')}}">
		@if($errors->has('email'))
			<p style="color: red;">{{$errors->first('email')}}</p>
		@endif
		<label>Content</label>
		<textarea name="content" >{{old('content')}}</textarea>
		@if($errors->has('content'))
			<p style="color: red;">{{$errors->first('content')}}</p>
		@endif
		<button type="submit">Submit</button>
	</form>
@endsection