//Use a RegEx pattern to search for an id, if present
	var pattern = new RegExp('\#(.*)');
	var id = pattern.exec(window.location)[0].replace('#','');
	//Prevent the browser's default behavior of jumping to the id
	document.location = '#';
	//When the page finishes loading, smoothly scroll to the specified content
	$(document).ready(function() {
	    if(id != "") {
	        $('html,body').animate({
	            scrollTop: $('#' + id).offset().top - 75
	        }, 1650);
	    }
	});