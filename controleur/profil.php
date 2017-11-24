<?php
//on vérifie si les données sont bien renseigner
if (isset($_SESSION['id'])){
	require_once "./vue/profil.php";
}else{
	echo "Vous n'avez pas remplis les champs";
}
?>