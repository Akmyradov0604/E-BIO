@extends('layout')

@section('content')
<div class="container">
	<div class="lectures">
		<div class="thumbnail">
			<a href="{{ route('lectures.show', [app()->getLocale(), 1]) }}">
				<img src="/img/11558.jpg" alt="cell">
				<div class="container__thumb">
					<p>{{__('Chemistry of life')}}</p>
				</div>
			</a>
		</div>
		<div class="thumbnail">
			<a href="lectures/2">
				<img src="/img/11558.jpg" alt="cell">
				<div class="container__thumb">
					<p>{{__('Water')}}</p>
				</div>
			</a>
		</div>
		<div class="thumbnail">
			<a href="lectures/3">
				<img src="/img/11558.jpg" alt="cell">
				<div class="container__thumb">
					<p>{{__('Macromolecules')}}</p>
				</div>
			</a>
		</div>
		<div class="thumbnail">
			<a href="lectures/3">
				<img src="/img/11558.jpg" alt="cell">
				<div class="container__thumb">
					<p>{{__('Metabolism')}}</p>
				</div>
			</a>
		</div>
	</div>
<div class="lectures">
	<div class="thumbnail">
			<a href="lectures/4">
				<img src="/img/11558.jpg" alt="cell">
				<div class="container__thumb">
					<p>{{__('Cell')}}</p>
				</div>
			</a>
		</div>
		<div class="thumbnail">
			<a href="lectures/5">
				<img src="/img/11558.jpg" alt="cell">
				<div class="container__thumb">
					<p>{{__('Cellular Respiration')}}</p>
				</div>
			</a>
		</div>
		<div class="thumbnail">
			<a href="lectures/6">
				<img src="/img/11558.jpg" alt="cell">
				<div class="container__thumb">
					<p>{{__('Photosynthesis')}}</p>
				</div>
			</a>
		</div>
		<div class="thumbnail">
			<a href="lectures/7">
				<img src="/img/11558.jpg" alt="cell">
				<div class="container__thumb">
					<p>{{__('Cell communiccation')}}</p>
				</div>
			</a>
		</div>
	</div>
	<div class="lectures">
		<div class="thumbnail">
			<a href="lectures/8">
				<img src="/img/11558.jpg" alt="cell">
				<div class="container__thumb">
					<p>{{__('Cell cycle')}}</p>
				</div>
			</a>
		</div>
		<div class="thumbnail">
			<a href="lectures/9">
				<img src="/img/11558.jpg" alt="cell">
				<div class="container__thumb">
					<p>{{__('Meiosis')}}</p>
				</div>
			</a>
		</div>
		<div class="thumbnail">
			<a href="lectures/10">
				<img src="/img/11558.jpg" alt="cell">
				<div class="container__thumb">
					<p>{{__("Mendel's gene idea")}}</p>
				</div>
			</a>
		</div>
		<div class="thumbnail">
			<a href="lectures/12">
				<img src="/img/11558.jpg" alt="cell">
				<div class="container__thumb">
					<p>{{__('From gene to protein')}}</p>
				</div>
			</a>
		</div>
	</div>
	
</div>
</div>
@endsection