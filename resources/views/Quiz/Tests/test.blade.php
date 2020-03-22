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
<div class="num" style="display: none;">
	@php
	echo htmlspecialchars($num);
	@endphp
</div>
<div class="theme" style="display: none;">
	@php
	echo htmlspecialchars($theme);
	@endphp
</div>
<div class="quiz">
	<div class="questions">
		<h1 class="question"></h1>
	</div>
	<div class="options">
		<button class="btn btn-outline-success option1" onclick="checkAns(1)"></button>
		<button class="btn btn-outline-success option2" onclick="checkAns(2)"></button>
		<button class="btn btn-outline-success option3" onclick="checkAns(3)"></button>
		<button class="btn btn-outline-success option4" onclick="checkAns(4)"></button>
	</div>
</div>
<div class="score-section" style="display: none;">
	<h1 class="text"></h1>
	<h1 class="score"></h1>
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
<script src="/js/data.js"></script>
<script>
	var number = $('.num').text();
	var theme = $('.theme').text();
	var thm = $.trim(theme);
	var num = $.trim(number);
	var correct = 0;
	var i = 0;
	var wrong = 0;
	console.log(thm);
	generete(0);
	function generete(index){
		$('.question').text(quiz[thm][index].question);
		$('.option1').text(quiz[thm][index].option1);
		$('.option2').text(quiz[thm][index].option2);
		$('.option3').text(quiz[thm][index].option3);
		$('.option4').text(quiz[thm][index].option4);
	}
	function checkAns(id){
		if(quiz[thm][i].correctAns == id){  
			correct++;
			quiz[thm][i].viseted = 1;
		} else {
			wrong++;
		}
		console.log(correct);
		i++;
		if(num <= i) {
			$('.quiz').css('display', 'none');
			$('.score-section').css('display', 'block');
			var score = (((correct - (wrong/4)) / num)*100);
			if(score == 100){
				$('.text').text('Gutlaýan, siz, hemme sowallara dogry jogap berdiňiz. ');
			}else if(score < 80 && score > 60){
				$('.text').text('Gaty gowy. Siz soraglaň köp bölegine jogap berdiňiz.');
			}else if(score < 60 && score > 40){
				$('.text').text('Gowy. Belki indiki gezekde gowy edersiňiz.');
			}else if(score < 40 && score > 20){
				$('.text').text('Gowy. Belki indiki gezekde gowy edersiňiz.');
			} else if(score < 20 && score > 0){
				$('.text').text('Gowy. Belki indiki gezekde gowy edersiňiz.');
			}else {
				$('.text').text('Ruhdan düşmäň.Siz hiç hili sowala jogap berip bilmediňiz.');
			}
			$('.score').text("Siziň netijäňiz " + score + "%");

			console.log(correct)
			console.log(wrong)
		}else { 
			generete(i);
		}
	}
</script>
</body>
</html>
