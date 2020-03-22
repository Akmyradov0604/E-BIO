@extends('layout')

@section('content')
<div class="wrap">
	<div class="search">
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text lighten-3" id="basic-text1"><i class="fas fa-search "
					aria-hidden="true"></i></span>
				</div>
				<input id="myInput" class="form-control" type="text" placeholder="{{__('Search')}}" aria-label="Search">
			</div>	
		</div>
		<div class="accordion" id="accordionExample" style="margin-top: 30px;">
		</div>
	</div>

	<div class="locale" style="display: none;">
		{{ app()->getLocale() }}
	</div>
	@endsection

	@section('scripts')
		<script>
			$(document).ready(function(){
			  $("#myInput").on("keyup", function() {
			    var value = $(this).val().toLowerCase();
				var locale = $.trim($(".locale").text());
			   	$.ajax({
			   	type : 'get',
			   	url : '{{ URL::to(route('search', app()->getLocale() )) }}',
			   	data:{'search':value},
			   	success:function(data){
			   	$('.accordion').html(data);
			   	}
			   	});

			  });
			});
		</script>
		<script type="text/javascript">
			$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
		</script>
	@endsection