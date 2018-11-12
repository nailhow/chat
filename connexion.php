<?php
	session_start();
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=chat;charset=utf8', 'root', '');	
	} catch (Exception $e) {
		echo 'Exception reçue : ',  $e->getMessage(), "\n";
	}
