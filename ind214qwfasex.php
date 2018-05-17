<!DOCTYPE html>
<html>
	<head>
	 <link rel="stylesheet" type="text/css" href="/css/style.css" />
	 <script src="https://yastatic.net/jquery/3.1.0/jquery.min.js"></script>
	 <link rel="stylesheet" href="owl-carousel/owl.carousel.css"/>
	 <script src="owl-carousel/owl.carousel.min.js"></script>
	</head>
	<body>
	<div class="main">
		<h1>Hello world</h1>
		<p>Lorem ipsum — dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
		<div class="slider">
		<div id="carousel">
			<div class="carousel-element">
			<img  src="http://lab1.std-579.ist.mospolytech.ru/images/html.jpg">
			</div>
			<div class="carousel-element"><img src="owl.jpg"></div>
			

		</div>
		
		</div>
		</div>
	
	<script>$(document).ready(function(){
	
	// Находим блок карусели
	var carousel = $("#carousel");

	// Запускаем плагин карусели
	carousel.owlCarousel({
		singleItem: true,
		pagination: true,
	});
});
</script>
	</body>
</html>