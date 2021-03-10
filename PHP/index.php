<?php

// use Classes\Dices;
require_once('Classes/Dices.php');

echo( Dices::$cpt );

echo("<br>");

$d = new Dices();
echo( $d::$cpt );

echo("<br>");

echo( Dices::$cpt );


$b = new Dices();
echo( $d::$cpt );