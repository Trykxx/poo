<?php

require_once './Utils/Autoloader.php';

use App\Entity\Bd;
use App\Utils\Autoloader;

Autoloader::autoload();

$description='jfgnqsfnzeklfnsdfklwvnrsgvnioswrfsdnflisdjflkdsnfuyuyrtrterdgfhgjhghjtysd';

$tintin= new Bd('Tintin en Amérique',$description,'','');
echo $tintin->getNom();