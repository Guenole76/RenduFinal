<?php

$hostname = "localhost";
$dbport = 3306;
$user     = "root";
$password = "";
$nom_base_donnees = "league_of_friend";



try {
	$connexion = new PDO("mysql: host=$hostname; port=$dbport; dbname=$nom_base_donnees", $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	$connexion->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}

catch(Exception $e) {
	echo 'Erreur : '.$e->getMessage().'<br/>';
	echo 'N° : '.$e->getCode();

	exit();
}