<?php

require_once('Car.php');
require_once('Bike.php');

$CARS = [
    new Car("renault", "koleos", 140, "blue", 30000),
    new Car("renault", "kangoo", 70, "blanc", 500),
    new Car("renault", "megane", 110, "rouge", 15000)
];

$BIKES = [
    new Bike("suzuki", "350DR", 31, "blue", 500),
    new Bike("suzuki", "650SV", 68, "blanc", 3000),
    new Bike("suzuki", "gladius", 70, "rouge", 5000)
];