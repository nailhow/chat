<?php

session_start();

require('models/model.php');

$erreurConnectionMsg = "";
if (isset($_POST['connexionEmail']) AND isset($_POST['connexionPwd'])) {


	echo $_POST['connexionEmail'];


	$req = getUser($_POST['connexionEmail']);
 	

 	$resultats = $req->fetch();


 	echo $_POST['connexionPwd'];
echo "ffff";
 	echo $resultats['password'];
 	$correctpass = ($_POST['connexionPwd'] == $resultats['password']);
	if ($correctpass) {
		echo "test";
		$erreurConnectionMsg = "";
		$_SESSION['ID']=$resultats['id'];
		$_SESSION['pseudo']=$resultats['pseudo'];
		header('Location: pagechat.php') ;
	} else {
		$erreurConnectionMsg = 'Mot de passe erroné';
	}
}

require('views/acceuil.php');

?>