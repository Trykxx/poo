<?php

require_once './Utils/Autoloader.php';

use App\Utils\Autoloader;
use App\Entity\User;
use App\Entity\Peugeot;
use App\Entity\Renault;

Autoloader::autoload();

$voiture1 = new Renault();

// require_once './Utilitaire/Engine.php';
// require_once './abstract/Vehicule.php';
// require_once './Entity/User.php';
// require_once './Entity/Peugeot.php';
// require_once './Entity/Renault.php';


$voiture2 = new Peugeot();
$user = new User();
$user->setPseudo('Nicolas');

echo $voiture1->demarrer() . '<br>';
echo $voiture2->demarrer() . '<br>';

echo $voiture1->carburant() . '<br>';
echo $voiture2->carburant() . '<br>';

echo $voiture1->nbTest() . '<br>';
echo $voiture2->nbTest() . '<br>';

echo $voiture1->start($user) . '<br>';
echo $voiture2->start($user) . '<br>';

echo $voiture2->accident($user, false);
