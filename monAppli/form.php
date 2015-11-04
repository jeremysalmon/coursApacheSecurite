<?php

$bdd = new PDO('mysql:host=localhost;dbname=testigs;charset=utf8', 'root', '1234');

if(!isset($_POST['nom'])){
	echo("<h2>Impossible de creer, parametre manquant</h2>");
	return false;
}

$prenom = strtoupper($_POST['nom']);
$nom = strtoupper($_POST['prenom']);


$reponse = $bdd->query('INSERT INTO client VALUES(0, "'.$prenom.'","'.$nom.'")');


header('location: list.php');
?>
