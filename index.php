<?php

session_start();

require('models/model.php');

$erreurConnectionMsg = "";
if (isset($_POST['connexionEmail']) AND isset($_POST['connexionPwd'])) {
	$req = insertUser($_POST['connexionEmail'], $_POST['connexionPwd']);
 	$resultats = $req->fetch();
 	$correctpass = ($_POST['connexionPwd'] == $resultats['mdp']);
	if ($correctpass) {
		$_SESSION['ID']=$resultats['id'];
		$_SESSION['pseudo']=$resultats['pseudo'];
		header('Location: pagechat.php') ;
	} else {
		$erreurConnectionMsg = 'Mot de passe erroné';
	}
}

require('views/acceuil.php');

?>