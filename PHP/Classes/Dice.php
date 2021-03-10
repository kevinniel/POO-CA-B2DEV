<?php

namespace Classes;

class Dice
{

    public $currentValue;
    public $numberOfFaces;

    public function __construct($numberOfFaces = 6)
    {
        $this->numberOfFaces = $numberOfFaces;
        $this->currentValue = 0;
    }

    public function roll()
    {
        $this->currentValue = random_int(1, $this->numberOfFaces);
    }

}


