if ($(window).width() >= 800) {
	window.addEventListener('scroll', doParallax);
		function doParallax(){
 			  var positionY = window.pageYOffset/2;
  			 document.body.style.backgroundPosition = "0 -" + positionY + "px";
				}
}