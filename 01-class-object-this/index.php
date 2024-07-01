<?php

require_once './User.php';
require_once './Animal.php';

// Un objet est une instance de classe
// Un objet est une variable qui contient toutes les propriétés,méthodes d'une classe.

$nicolas = new User();

$nicolas->firstName = 'Amit Nicolas';
$nicolas->lastName = 'Roig Menda';

echo $nicolas->bonjour();
echo '<br>';
echo $nicolas->presentation(22);
echo '<br>';


$dog = new Animal();

$dog->name = "Hercule";
$dog->type = "Berger Allemand";
$dog->age = 12;

echo $dog->name;
echo '<br>';
echo $dog->type;
echo '<br>';
echo $dog->age;
echo '<br>';
echo $dog->sleep();
echo '<br>';
echo $dog->eat();
echo '<br>';



$cat = new Animal();

$cat->name = "le chat";
$cat->type = "le chat de gouttiere";
$cat->age = 8;

echo $cat->name;
echo '<br>';
echo $cat->type;
echo '<br>';
echo $cat->age;
echo '<br>';
echo $cat->sleep();
echo '<br>';
echo $cat->eat();


