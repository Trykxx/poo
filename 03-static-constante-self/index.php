<?php

require_once './SimulateurCredit.php';
require_once './Mathematiques.php';

echo SimulateurCredit::TAUX . '<br>';
echo SimulateurCredit::calculInteret(10000) . '<br>';

echo Mathematiques::addition(10,2). '<br>';
echo Mathematiques::division(10,2). '<br>';
echo Mathematiques::multiplication(10,2). '<br>';
echo Mathematiques::soustraction(10,2). '<br>';
