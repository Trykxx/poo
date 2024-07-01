<?php

require_once './SimulateurCredit.php';

echo SimulateurCredit::TAUX;
echo '<br>';
echo SimulateurCredit::calculInteret(10000);