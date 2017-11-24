<?php 
	if (isset($_SESSION['id'])) {
		header("Location: index.php");
	}else{
		require_once "./vue/inscription.php";
	}
?>