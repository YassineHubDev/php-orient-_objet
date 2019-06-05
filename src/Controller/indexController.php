<?php
require dirname(__DIR__, 2) . '/autoload.php';

$database = new Database();
//$database->connect(); appelé directemebt dans le contructeur

//Requete SQL
$query = "SELECT * FROM produit WHERE etat_publication = 1";
$products = $database->query($query, 'produit');
