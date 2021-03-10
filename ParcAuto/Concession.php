<?php

class Concession
{
    public $name;
    public $cars;
    public $bikes;
    public $vehicleCount = 0;
    public $carsCount = 0;
    public $bikesCount = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addCars($cars)
    {
        foreach ($cars as $car) {
            $this->addCar($car);
        }
    }

    public function addCar($car)
    {
        $this->cars[] = $car;
        $this->vehicleCount++;
        $this->carsCount++;
    }
    
    public function addBikes($bikes)
    {
        foreach ($bikes as $bike) {
            $this->addBike($bike);
        }
    }

    public function addBike($bike)
    {
        $this->bikes[] = $bike;
        $this->vehicleCount++;
        $this->bikesCount++;
    }

    public function countWheels()
    {
        // roues des voitures * nb voitures
        // +
        // roues des motos * nb motos
        return $this->cars[0]::$wheelNumber * $this->carsCount + $this->bikes[0]::$wheelNumber * $this->bikesCount;
    }
}












