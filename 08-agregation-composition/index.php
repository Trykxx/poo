<?php

require_once './Database.php';
require_once './DatabaseAgregation.php';

$bdd = new Database();
$bdd->dbConnect();
// echo $bdd->getPdo();
var_dump($bdd->getPdo());


//! Agrégation

$test = new PDO('mysql:host=localhost;dbname=library_db', 'root', '');

$bddAgregation = new DatabaseAgregation($test);
var_dump($bddAgregation->getPdo());
