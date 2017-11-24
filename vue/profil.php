<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
</head>
<body>
<!-- Header et aside -->
	<!-- Header et aside -->
	<!-- Section -->
	<section>
	<?php
	echo "<h2>Mon profil</h2><ul><li>Nom: ".$_SESSION['nom']."</li><li>Prenom: ".$_SESSION['prenom']."</li><li>Sexe: ".$_SESSION['sexe']."</li><li>Email: ".$_SESSION['email']."</li><li>Date d'inscription: ".$_SESSION['date']."</li></ul>"
?>
	</section>
	<!--Fin de section -->
</body>
</html>