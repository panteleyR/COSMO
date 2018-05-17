//<![CDATA[ 
function fulltime () { 
var time=new Date(); 

var newYear=new Date("04,12,2019,00:00:00"); 
var totalRemains=(newYear.getTime()-time.getTime()); 
if (totalRemains>1){ 
var RemainsSec = (parseInt(totalRemains/1000)); 
var RemainsFullDays=(parseInt(RemainsSec/(24*60*60))); 
var secInLastDay=RemainsSec-RemainsFullDays*24*3600; 
var RemainsFullHours=(parseInt(secInLastDay/3600)); 
if (RemainsFullHours<10){RemainsFullHours="0"+RemainsFullHours}; 
var secInLastHour=secInLastDay-RemainsFullHours*3600; 
var RemainsMinutes=(parseInt(secInLastHour/60)); 
if (RemainsMinutes<10){RemainsMinutes="0"+RemainsMinutes}; 
var lastSec=secInLastHour-RemainsMinutes*60; 
if (lastSec<10){lastSec="0"+lastSec}; 
document.getElementById("RemainsFullDays").innerHTML=RemainsFullDays+"<span id='Rem'>days</span>"; 
document.getElementById("RemainsFullHours").innerHTML=RemainsFullHours+"<span id='Rem'>Hours </span>"; 
document.getElementById("RemainsMinutes").innerHTML=RemainsMinutes+"<span id='Rem'>Minutes</span>"; 
document.getElementById("lastSec").innerHTML=lastSec+"<span class='secWidth' id='Rem'>Sec</span>"; <!-- highslide start --> 
setTimeout('fulltime()',10)  
} 
else{ 
document.getElementById("clock").innerHTML=""; 
} 
} 
//]]> 

/*var canvas;
var context;
var screenH;
var screenW;
var stars = [];
var fps = 50;
var numStars = 2000;

$('document').ready(function() {
  
  // Calculate the screen size
	screenH = $(window).height();
	screenW = $(window).width();
	
	// Get the canvas
	canvas = $('#space');
	
	// Fill out the canvas
	canvas.attr('height', screenH);
	canvas.attr('width', screenW);
	context = canvas[0].getContext('2d');
	
	// Create all the stars
	for(var i = 0; i < numStars; i++) {
		var x = Math.round(Math.random() * screenW);
		var y = Math.round(Math.random() * screenH);
		var length = 1 + Math.random() * 2;
		var opacity = Math.random();
		
		// Create a new star and draw
		var star = new Star(x, y, length, opacity);
		
		// Add the the stars array
		stars.push(star);
	}
	
	setInterval(animate, 1000 / fps);
});

/**
 * Animate the canvas
 *//*
function animate() {
	context.clearRect(0, 0, screenW, screenH);
	$.each(stars, function() {
		this.draw(context);
	})
}

/**
 * Star
 * 
 * @param int x
 * @param int y
 * @param int length
 * @param opacity
 *//*
function Star(x, y, length, opacity) {
	this.x = parseInt(x);
	this.y = parseInt(y);
	this.length = parseInt(length);
	this.opacity = opacity;
	this.factor = 1;
	this.increment = Math.random() * .03;
}

/**
 * Draw a star
 * 
 * This function draws a start.
 * You need to give the contaxt as a parameter 
 * 
 * @param context
 *//*
Star.prototype.draw = function() {
	context.rotate((Math.PI * 1 / 10));
	
	// Save the context
	context.save();
	
	// move into the middle of the canvas, just to make room
	context.translate(this.x, this.y);
	
	// Change the opacity
	if(this.opacity > 1) {
		this.factor = -1;
	}
	else if(this.opacity <= 0) {
		this.factor = 1;
		
		this.x = Math.round(Math.random() * screenW);
		this.y = Math.round(Math.random() * screenH);
	}
		
	this.opacity += this.increment * this.factor;
	
	context.beginPath()
	for (var i = 5; i--;) {
		context.lineTo(0, this.length);
		context.translate(0, this.length);
		context.rotate((Math.PI * 2 / 10));
		context.lineTo(0, - this.length);
		context.translate(0, - this.length);
		context.rotate(-(Math.PI * 6 / 10));
	}
	context.lineTo(0, this.length);
	context.closePath();
	context.fillStyle = "rgba(255, 255, 200, " + this.opacity + ")";
	context.shadowBlur = 5;
	context.shadowColor = '#ffff33';
	context.fill();
	
	context.restore();
}*/
$('document').ready(function() {
	$(window).scroll(function(){
		
		var distanceTop = $('#rocket-action').offset().top - $(window).height()+100;
		if  ($(window).scrollTop() > distanceTop){
		$('.slide-left').animate({'left':'0px'},1000);
		
		
		}
		
	});
	/*var ip = $("ip-client").value();
		
		$.ajax({
			type:"POST",
			  url: 'pars.html',
			  data: ip,
			  success: function(events){
				alert('Load was performed.');
				
			  }
			  
		});*/
		
		
		/*PARRSSS*/
		
		/*
		var elPars=$('.post-image-src');
		var urlPars='url("https://kudago.com'+elPars.attr('data-echo-background')+'")';
		console.log(urlPars);console.log(elPars);
		elPars.css('background',urlPars);*/ 
		var elems = $('.post-title-link');
		console.log(elems);
		var len=elems.length;
		var hrefEvent=[];
		for(var i=0; i<len;i++){
			
		 hrefEvent[i]=$(elems[i]).attr('href');
		 hrefEvent[i]='https://kudago.com'+hrefEvent[i];
		 $(elems[i]).attr('href',hrefEvent[i]);
		console.log(hrefEvent);
		}
		
});