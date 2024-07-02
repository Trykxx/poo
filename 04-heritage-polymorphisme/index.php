<?php

require_once './Article.php';
require_once './Conserve.php';
require_once './Aliment.php';

// $article = new Article('Pain',10);

// echo $article->displayProduct().'<br>';

$boiteConserve = new Conserve('Ravioli',12.99,['truc','bidule','machin']);

echo $boiteConserve->displayProduct().'<br>';

// $boiteConserve->setListExcipiant(['truc','bidule','machin']);

echo $boiteConserve->displayExcipiant().'<br>';

$boite = new Conserve('thon',5.99,['truc','bidule','machin']);

echo $boite->displayExcipiant().'<br>';

$produit = new Aliment('Sauce tomate',9.99,'14-06-2024');

echo $produit->displayProduct();

