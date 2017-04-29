<?php

/** Filename : lexus.php
 */
include "Car.php";

class Lexus extends Car
{
    private $leatherSeats = "brown";
    private $leatherCost = 4000;
    public function drive($speed)
    {
        if ($speed > 200) {
            $this->gSpeed = 200;
        } else {
            $this->gSpeed = $speed;
        }

    }
    public function getCost()
    {
        return $this->cost + $this->leatherCost;
    }

}

?>