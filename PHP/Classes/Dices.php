<?php

// namespace Classes;

// use Dice;
require_once('Dice.php');

class Dices
{
    public $dice1;
    public $dice2;
    public $sumDices;
    public $isDouble;

    public function __construct()
    {
        $this->dice1 = new Dice();
        $this->dice2 = new Dice();
    }

    public function roll()
    {
        $this->dice1->roll();
        $this->dice2->roll();
        $this->updateSum();
        $this->updateDouble();
    }

    private function updateDouble()
    {
        $this->isDouble = $this->isDouble();
    }

    private function isDouble()
    {
        return $this->dice1->currentValue == $this->dice2->currentValue;
    }

    private function updateSum()
    {
        $this->sumDices = $this->calculateSum();
    }

    private function calculateSum()
    {
        return $this->dice1->currentValue + $this->dice2->currentValue;
    }

}