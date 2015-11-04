<?php

if(!isset($_GET['id'])){
	echo("Impossible de continuer");
	return false;
}

$bdd = new PDO('mysql:host=localhost;dbname=testigs;charset=utf8', 'root', '1234');

$reponse = $bdd->query('DELETE FROM client WHERE id='.$_GET['id']);

header('location: list.php');
?>

