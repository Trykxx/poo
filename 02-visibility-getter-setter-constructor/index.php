<?php
// - new est mot clé permettant d'effectuer une instanciation.
// - Une class peut produire plusieurs objets. Nous pouvons donc effectuer plusieurs instanciations 'new'
// - $audi est techniquement appelé "l'objet de la class Panier"

// Crée un nouvel objet de la classe MaClasse, déclenche automatiquement la méthode __construct

require_once './Car.php';
require_once './Book.php';

$audi = new Car();
$audi->setModel('renault')->getModel();
$audi->setColor('jaune')->getColor();
$audi->setDate(2050)->getDate();

echo $audi->display();
echo '<br>';

// $livre1 = new Book();
// $livre1->setTitle('Alice au pays des merveilles')->getTitle();
// $livre1->setAuthor('Lewis Carroll')->getAuthor();
// $livre1->setPages(124)->getPages();
// $livre1->setYear(1865)->getYear();

// echo $livre1->read();
// echo '<br>';


// $livre2 = new Book();
// $livre2->setTitle("Harry Potter à l'école des sorciers")->getTitle();
// $livre2->setAuthor('J. K. Rowling')->getAuthor();
// $livre2->setPages(320)->getPages();
// $livre2->setYear(1997)->getYear();

// echo $livre2->read();

$livre1= new Book('Lewis Carroll','Alice au pays des merveilles',124,1865);
echo $livre1->read();
echo '<br>';

$livre2= new Book('J. K. Rowling',"Harry Potter à l'école des sorciers",320,1997);
echo $livre2->read();
echo '<br>';
