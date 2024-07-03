<?php

require_once './Peugeot.php';
require_once './Renalut.php';

$voiture1=new Renault();
$voiture2=new Peugeot();

echo $voiture1->demarrer() . '<br>';
echo $voiture2->demarrer() . '<br>';

echo $voiture1->carburant() . '<br>';
echo $voiture2->carburant() . '<br>';

echo $voiture1->nbTest() . '<br>';
echo $voiture2->nbTest() . '<br>';