<?php

require_once './Bird.php';
require_once './Wolf.php';



$oiseau = new Bird('Billy',10,2,['machin','chouette'],true);
echo $oiseau->description() . '<br>';

$loup = new Wolf('Kiba',15,4,['machin','chouette'],true);

echo $loup->eatBird($oiseau);