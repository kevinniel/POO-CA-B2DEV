<?php

require_once('Concession.php');
require_once('config.php');

echo('<h1>gestion concession</h1>');

// création concession
$concession = new Concession("toto");
// intégration des voitures et des motos dans la concession
$concession->addCars($CARS);
$concession->addBikes($BIKES);
// calcul du nombre total de roues dans la concession
echo($concession->countWheels());