<?php

use Classes\Dices;

$d = new Dices();
echo("valeur initiale : <br>");
echo($d->dice1->currentValue);
echo($d->dice2->currentValue);
$d->roll();
echo("<br><br>valeur après lancement : ");
echo($d->dice1->currentValue);
echo($d->dice2->currentValue);