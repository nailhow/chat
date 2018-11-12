<?php
	
	

function insertUser($pseudo,$mdp) {
	$bdd = co();
 	$req = $bdd->prepare('INSERT INTO utilisateur (id, pseudo, password) 
 						  VALUES (NULL, :pseudo, :mdp);');
 	$req->bindParam(':pseudo', $pseudo);
 	$req->bindParam(':mdp', $mdp);
 	$req->execute();
	return $req;

}


function co() {
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=chat;charset=utf8', 'root', '');
		return $bdd;	
	} catch (Exception $e) {
		echo 'Exception reçue : ',  $e->getMessage(), "\n";
	}
}
