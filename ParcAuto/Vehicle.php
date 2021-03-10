<?php

class Vehicle
{
    public $brand;
    public $model;
    public $horses;
    public $color;
    public $price;

    public static $wheelNumber;

    public function __construct(
        $brand,
        $model,
        $horses,
        $color,
        $price
    ) {
        $this->brand = $brand;
        $this->model = $model;
        $this->horses = $horses;
        $this->color = $color;
        $this->price = $price;
    }

}