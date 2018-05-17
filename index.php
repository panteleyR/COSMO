



<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script  src="/js/script.js" ></script>
 <link rel="stylesheet" href="owl-carousel/owl.carousel.css"/>
	 <script src="owl-carousel/owl.carousel.min.js"></script>
 <link rel="stylesheet" type="text/css" href="/css/style.css" />
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


 
  <title>Hello, world!</title>
</head>
<body >
<div class="container" style="overflow:hidden;">
<div class="row">
<nav style="width:100%;" class="navbar navbar-expand navbar-dark bg-dark">
      <a class="navbar-brand" href="#">CosmoLab</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--<div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>

      </div>-->
    </nav>

</div> 
<div class="row">
<div class="col-md-7"><h1>До дня космонавтики:</h1></div>
 <div class="col-md-5">
	 
	<div id='clockall'>
		<div id='clou_xs'> 
		<div id='clock'> 
		<span id='RemainsFullDays'></span> <span id='RemainsFullHours'></span> <span id='RemainsMinutes'></span> <span id='lastSec'></span>  
		<script type="text/javascript">fulltime();</script>  
		</div> 
		</div> 

	</div>
</div>
	<div class="col-lg-12">
	<div class="video">
	<iframe id="player2" src="https://www.youtube.com/embed/YNtB42bgtAM?rel=0&amp;controls=0&amp;showinfo=0;autoplay=1&amp;loop=1&amp;playlist=YNtB42bgtAM;mute=1;" frameborder="0" allow="autoplay; encrypted-media"  allowfullscreen></iframe>
	
	<div class="back-video"></div>
	</div>
	
	</div>
	
</div>
<div class=" row huy"> 
<?php 
$city='msk';
$content = file_get_contents('https://kudago.com/'.$city.'/events/?date=2018-04-12');
$i=0;
while($i<8){
$pos= strpos($content, '<article class="post post-rect"');

$content = substr($content, $pos);
$pos2=strpos($content, '</article>');

$article[$i]['full']=substr($content,0, $pos2+10);

$posH=strpos($article[$i]['full'], '<h2 class="post-title');
$posH2=strpos($article[$i]['full'], '</h2>');
if($posH){
	$article[$i]['title']= substr($article[$i]['full'], $posH, $posH2-$posH+5);
	$article[$i]['image']= $article[$i]['full'];
	$posImg=strpos($article[$i]['image'], '<div class="post-image-src');
	$article[$i]['image']= substr($article[$i]['image'], $posImg);
	$posImg2=strpos($article[$i]['image'], '</div>');

	$article[$i]['image']= substr($article[$i]['image'], 0, $posImg2+6);
	
	$posHref=strpos($article[$i]['image'], 'data-echo-background="');
	$article[$i]['href']=substr($article[$i]['image'],$posHref+23);
	
	$posHref2=strpos($article[$i]['image'], '">');
		$a=strval($article[$i]['href']);
	$a=substr($article[$i]['href'],0,$posHref2);
	
	/*print($article[$i]['href']);*/
	
	$article[$i]['href']='<div> <img src="https://kudago.com/'.$a;
	/*echo htmlspecialchars($article[$i]['href']);
	echo $posHref2;*/
	/*echo $article[$i]['image']; */ 
	/*$article[$i]['image']=substr_replace($article[$i]['image'],$article[$i]['href'] ,$posHref,0);*/
} 

$content = substr($content, $pos2+10);
 
$i=$i+1;
$posH=0;
}



?>
</div>
<div class="row">

 <div class="col-md-6">
 <h2>Events</h2> IP: Здесь мог бы быть ай пи посетителя, но все мы прекрасно знаем, чья это вина)))
	<div id="carousel">
			<?php for($i=0;$i<7;$i++){?>
			<div class="carousel-element">
				<?php 
				if($article[$i]['title']){
					if($i != 4){
						print_r($article[$i]['href']);
						echo $article[$i]['image'];
						echo $article[$i]['title'];
					}
				}?> 
			</div>
			<?php }?>
			<!--<div class="carousel-element"><img src="owl.jpg"></div>-->
	</div>
	
 </div>
<div class="col-md-5" style="    position: relative;">
<p style="    position: absolute;
    bottom: 0;
    height: 200px;
    width: 100%;"> <img src="/img/dayCosmo.jpeg" style="float:right; width:100%; height:200px;"></p>
</div>
</div>
<div  id="rocket-action" class="row slide-left">
	<div class="col-lg-3 "><img class="rocket" src="/img/rocket.png" > </div>
	<div  class="col-md-9" style="  align-items: center; display: flex;">
	<div class="md-9"><p>Минимальная скорость, которую необходимо развить ракете на высоте 100км от поверхности, чтобы он совершал движение по круговой орбите вокруг планеты равна 7,91 км/с</p></div></div>
</div>
<div  id="rocket-action-2" class="row slide-left">
	<div style=" align-items: center; display: flex;"  class="col-md-9">
		<p>За всю историю космонавтики в космосе никто не погиб. Несчастные случаи были, но все они происходили либо при стартах с Земли, либо при спуске с орбиты. Все погибшие космонавты погибли в атмосфере.</p>
	</div>
	<div class="col-lg-3 "><img class="astro" src="/img/astronaut.png" > </div>
</div>


<div class="row">
<p>12 апреля в России отмечают День космонавтики в ознаменование первого космического полета, совершенного Юрием Гагариным на корабле «Восток», тем самым став космическим первопроходцем. С 1968 года отечественный День космонавтики получил и официальное общемировое признание после учреждения Всемирного дня авиации и космонавтики.</p>
</div>
<h2>Рекомендуем посетить музей косманавтики прямо у метро ВДНХ</h2>
<div  class="row maps" id="map">
<!--<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A370cd4006013ac6da61546516eb918890b5d41d475710637b19a3d110d34722c&amp;source=constructor" width="644" height="400" frameborder="0"></iframe>-->
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A370cd4006013ac6da61546516eb918890b5d41d475710637b19a3d110d34722c&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true;id=map"></script></div>
</div>


<script>$(document).ready(function(){
	
	// Находим блок карусели
	var carousel = $("#carousel");

	// Запускаем плагин карусели
	carousel.owlCarousel({
		 
		
		/*pagination: true,*/
	});
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>