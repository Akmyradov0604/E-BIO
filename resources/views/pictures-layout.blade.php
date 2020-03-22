<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>E-Bio</title>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/bootstrap-grid.min.css">
</head>
<style>
body{ margin: 0; padding: 0;}
html {margin: 0; padding: 0;}
</style>
<body>
	<a class="btn btn-success" style="margin: 10px; box-sizing: border-box;" href="{{ route('pictures', app()->getLocale()) }}">{{__('Go back')}}</a>
	<div class="grid">
		<div class="image">
			@yield('svg')
		</div>
		<div class="content-body" style="">
			@yield('type')
			<p class="func"></p>
		</div>
	</div>
	<script src="/js/jquery-3.3.1.js"></script>
	<script src="/js/popper.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/human.js"></script>
	<script>
	function bodyPart(part){
		$('.content-body').css('display', 'block');
		$('.intr').text(part);
		$('.func').text(parts[part]);
	}
	</script>
</body>
</html>