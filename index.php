<?php

require_once 'Personne.php';


$syrine = new Personne('GHRIBI', 'Syrine', 'Saint germain', '28/09/1992');
$syrine->afficherInfos();
$syrine->modifyAdress('Rueil-Malmaison');
$syrine->afficherInfos();
echo "Age :Syrine a" .$syrine->calculAge()."ans\n";