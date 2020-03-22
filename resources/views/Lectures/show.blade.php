<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E-Bio</title>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	@yield('header')
</head>
<body class="bodyy">
	<div class="header fixed-top">
	<nav class="navbar navbar-expand-lg custom" id = "navbar">
		<a class="navbar-brand" href="{{ route('home', app()->getLocale()) }}" style="font-size: 2.4em; color: #fff; margin-left: 10px;">E-BIO</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: #fff;">
			<span class="fas fa-bars"></span>
		</button>
		<div class="collapse navbar-collapse navigation" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto" style="margin-right: 60px;">
				<li class="nav-item active">
					<a class="nav-link" href="{{ route('home', app()->getLocale()) }}" style="color: #fff;">{{__('Home')}} <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle btn-outline-success" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;">
						{{__('Categories')}}
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ route('lectures', app()->getLocale()) }}" style="color: #1ED760;">{{__('Lectures')}}</a>
						<a class="dropdown-item" href="{{ route('pictures', app()->getLocale()) }}" style="color: #1ED760;">{{__('Pictures')}}</a>
						<a class="dropdown-item" href="{{ route('dictionary', app()->getLocale()) }}" style="color: #1ED760;">{{__('Dictionary')}}</a>
						<a class="dropdown-item" href="{{ route('quiz', [app()->getLocale()]) }}"style="color: #1ED760;">{{__('Quiz')}}</a>
					</div>

				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle btn-outline-success" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;">
						{{ strtoupper(app()->getLocale()) }}
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="" style="color: #1ED760; ">EN</a>
						<a class="dropdown-item" href="" style="color: #1ED760; ">TM</a>
					</div>

				</li>
			</ul>
		</div>
	</nav>
		<div class="progress-container">
		    <div class="progress-bar" id="myBar"></div>
		  </div>
	</div>
<div class="container">
	@include('html/bio ('.$id.')')
</div>
	<script src="/js/jquery-3.3.1.js"></script>
	<script src="/js/popper.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
		<script>
			window.onscroll = function() {myFunction()};

			function myFunction() {
			  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
			  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
			  var scrolled = (winScroll / height) * 100;
			  document.getElementById("myBar").style.width = scrolled + "%";
			}
		</script>
	@yield('scripts')
</body>
</html>