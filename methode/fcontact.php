<?php
	if((htmlspecialchars($_POST['nom'])) && (htmlspecialchars($_POST['sujet'])) &&
		(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))){
    		$to = "maximedu03120@hotmail.fr"; 
    		$subject = htmlspecialchars($_POST["sujet"]);
    		$message = htmlspecialchars($_POST["message"]);
    		$nom = "Bonjour tu as un message de ".$_POST['nom']." <br/> Email: ".$_POST['email'];
				if (mail($to, $subject, $message, $nom)){
	   		   	header("Location: index.php");
	   		   }else{
	   		   	echo "Le mail n'as pas fonctionné";
	   		   }
	}else{
			echo "Certains champs ne sont pas remplis.";
		}
?>