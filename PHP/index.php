<?php

require_once('Classes/Dice.php');

$d = new Dice();
echo("valeur initiale : <br>");
echo($d->currentValue);
$d->roll();
echo("<br><br>valeur après lancement : ");
echo($d->currentValue);