$(document).ready(function(){

	//Calcul la taille des section selon la taille de la fenêtre au chargement
	$('section').css('height',$(window).height().toString()+"px");
	$('section').css('paddingTop',($('nav').height()*2).toString()+"px");

	//Recalcul en fonction de la taille de la fenêtre durant la navigation
	$(window).resize(function(){
		$('section').css('height',$(window).height().toString()+"px");
		$('section').css('paddingTop',($('nav').height()*2).toString()+"px");
	});
	// Partie Navigation
	$("#clickmenu").click(function(){
		$("#menupresen").toggleClass("disparait");
	});
	$("#clickmenu1").click(function(){
		$("#menupresen1").toggleClass("disparait");
	});	
});