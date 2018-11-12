<?php

include("connexion.php");

 // Connexion à la base de données


if (isset($_GET['pseudo']) AND isset($_GET['mdp'])) {
 	$req = $bdd->prepare('INSERT INTO utilisateur (id, pseudo, password) 
 						  VALUES (NULL, :pseudo, :mdp);');
 	$req->bindParam(':pseudo', $_GET['pseudo']);
 	$req->bindParam(':mdp', $_GET['mdp']);
 	$req->execute();
 	$resultats= $req->fetch();
 	$correctpass=($_GET['mdp'] == $resultats['mdp']);

 		if ($correctpass) {

 			$_SESSION['ID']=$resultats['id'];
 			$_SESSION['pseudo']=$resultats['pseudo'];
 			header('Location: pagechat.php') ;
 		}
 		else{
 			echo 'Mot de passe erroné';
 		}
    }
?>