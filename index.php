<?php 
	//Ouvrir la session
	session_start();
	//Connexion base de données
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=excelsior', 'root', '');
		$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	}
	catch(Exception $e){
		die('Erreur : '.$e->getMessage());
	}
	//aside header
	require_once "./inc/header.inc.php";
	// classe user
	require_once "./methode/usermanager.php";
	require_once "./methode/user.php";
	//Affichage sur la page
	if (empty($_GET["page"])){
		require_once "vue/accueil.php";
	}else{
		//connexion deconnexion
		if ($_GET["page"] == "connexion") {
			require_once "controleur/connexion.php";
		}
		if ($_GET["page"] == "deconnexion") {
			require_once "controleur/deconnexion.php";
		}
		// 
		if ($_GET["page"] == "inscription") {
			require_once "controleur/inscription.php";
		}
		if ($_GET["page"] == "profil") {
			require_once "controleur/profil.php";
		}
	}
	 require_once "inc/footer.inc.php";
?>