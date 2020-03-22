@extends('layout')

@section('content')
<div class="container">
	<form method="POST" action="/dictionary">
		@csrf
		<div class="form-group">
			<label for="name">Name: </label>
			<input type="text" class="form-control" name="name">
		</div>
		<div class="form-group">
			<label for="description">Description: </label>
			<input type="text" class="form-control" name="description">
		</div>
		<button type="submit" class="btn btn-outline-success">Submit</button>
	</form>
</div>
@endsection