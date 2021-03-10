<?php

require_once('Concession.php');
require_once('config.php');

echo('<h1>gestion concession</h1>');

// création concession
$concession = new Concession("toto");
// var_dump($concession);
$concession->addCars($CARS);
$concession->addBikes($BIKES);

echo($concession->countWheels());

// echo("<pre><code>");
// var_dump($concession);
// echo("</code></pre>");




echo("<br>");