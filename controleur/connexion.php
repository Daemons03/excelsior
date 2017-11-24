<?php
//on vérifie si les données sont bien renseigner
if (isset($_POST['email']) && isset($_POST['password'])) {
	$usersquery = new UserManager($bdd);
	$user = $usersquery->getUser(htmlspecialchars($_POST['email']), htmlspecialchars($_POST['password']));
	// si les données sont juste
	if($user){
		$_SESSION['id'] = $user->getIdClient();
		$_SESSION['nom'] = $user->getNom();
		$_SESSION['prenom'] = $user->getPrenom();
		$_SESSION['sexe'] = $user->getSexe();
		$_SESSION['email'] = $user->getEmail();
		$_SESSION['date'] = $user->getDate();

		header("Location: index.php");
	}
}else{
	echo "Vous n'avez pas remplis les champs";
}
?>