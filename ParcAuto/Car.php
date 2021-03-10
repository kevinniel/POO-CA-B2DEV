<?php

require_once("Vehicle.php");

class Car extends Vehicle
{
    public static $wheelNumber = 4;

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