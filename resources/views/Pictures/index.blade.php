@extends('layout')

@section('content')
<div class="container">
	<h1 class="text-center" style="margin-top: 20px; color: #33e333;">{{ __('Learn anatomy of Animal, Cells and Plants structures') }}</h1>
	<div class="pictures">
		<div class="pictures__thumbnail">
			<a href="pictures/human">
				<img src="/img/29439.jpg" class=" img-thumbnail" alt="...">
				<h2>{{__('Human Anatomy')}}</h2>
			</a>
		</div>
		<div class="pictures__thumbnail">
			<a href="pictures/cell">
				<img src="/img/15232.jpg" class=" img-thumbnail" alt="...">
				<h2>{{__('Cells')}}</h2>
			</a>
		</div>
		<div class="pictures__thumbnail">
			<a href="pictures/plants">
				<img src="/img/37650.jpg" class=" img-thumbnail" alt="...">
				<h2>{{__('Plants')}}</h2>
			</a>
		</div>
	</div>
</div>
@endsection
