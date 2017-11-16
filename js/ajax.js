$(document).ready(function(){

	$("#valid").click(function(e){
		var nom = $("#nom").val();
		var sujet = $("#sujet").val();
		var email = $("#email").val();
		var message = $("#message").val();
		e.preventDefault();

		$.ajax({
			url: 'fcontact.php',
			type: 'POST',
			data: 'nom=' + nom + '&sujet=' + sujet + '&email=' + email + '&message=' + message,
			dataType: 'html',
			success : function(retour, statut){$("#resultcontact").html(retour);},
			error : function(resultat, statut, erreur){$("#result").html('erreur appel ajax'+'code retour = '+retour+' statut = '+statut);}
		});
	});
});