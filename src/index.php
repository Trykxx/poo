<?php

use App\Entity\Peugeot;
use App\Entity\Renault;
use App\Entity\User;

require_once './Utilitaire/Engine.php';
require_once './abstract/Vehicule.php';
require_once './Entity/User.php';
require_once './Entity/Peugeot.php';
require_once './Entity/Renault.php';


$voiture1=new Renault();
$voiture2=new Peugeot();
$user=new User();
$user->setPseudo('Nicolas');

echo $voiture1->demarrer() . '<br>';
echo $voiture2->demarrer() . '<br>';

echo $voiture1->carburant() . '<br>';
echo $voiture2->carburant() . '<br>';

echo $voiture1->nbTest() . '<br>';
echo $voiture2->nbTest() . '<br>';

echo $voiture1->start($user) . '<br>';
echo $voiture2->start($user) . '<br>';

echo $voiture2->accident($user,false);
