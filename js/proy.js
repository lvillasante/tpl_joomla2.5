/* Cufon */
// Cufon.replace('h1', { fontFamily:'Terminal Dosis'});
// Cufon.replace('h2,.da-slide h2 strong,h3, p.paragraphs_titles', {hover: true}, { fontFamily:'Terminal Dosis Book'});




$(document).ready(function(){
	$(".jqueryslidemenu ul li:first").addClass("home")
   	$(".jqueryslidemenu ul li:last-child a").css("background-image","none")
	
	$('#top').click(function(){ //Id del elemento cliqueable
		$('html, body').animate({scrollTop:0}, 'slow');
		return false;
	});
	
});