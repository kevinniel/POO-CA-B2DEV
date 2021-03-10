<?php

require_once('Vehicle.php');

class Bike extends Vehicle
{
    public static $wheelNumber = 2;

    public function __construct(
        $brand,
        $model,
        $horses,
        $color,
        $price
    ) {
        parent::__construct($brand,$model,$horses,$color,$price);
    }
}