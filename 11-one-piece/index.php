<?php

require_once './Pirate.php';
require_once './Marine.php';
require_once './Revolutionary.php';
require_once './ViceAdmiral.php';
require_once './Commander.php';
require_once './Captain.php';
require_once './CharacterManager.php';

$luffy = new Pirate('Luffy',25,1000000);
echo $luffy->getName() . '<br>';

$smoker = new Marine('Smoker',15,0);
echo $smoker->getName() . '<br>';

$escobar = new Revolutionary('Escobar',55,10000000);
echo $escobar->getName() . '<br>';

$trump = new ViceAdmiral('Trump',70,1000);
echo $trump->getName() . '<br>';
echo $trump->commandFleet() . '<br>';

$mustafa = new Commander('Mustafa',40,10000);
echo $mustafa->getName() . '<br>';
echo $mustafa->leadRevolution() . '<br>';

$sparrow = new Captain('Sparrow',20,1000000,"Les burning men");
echo $sparrow->getName() . '<br>';
echo $sparrow->getCrewName() . '<br>';

$manager = new CharacterManager();
$manager->addCharacter($luffy);
$manager->addCharacter($smoker);
$manager->listCharacters();