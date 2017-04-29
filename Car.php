<?php

// filename Car.php
include "ICar.php";
class Car implements ICar
{
    protected $gSpeed = 0;
    protected $cost = 9000;

    public function drive($speed)
    {
        if ($speed > 130) {
            $this->gSpeed = 130;
        } else {
            $this->gSpeed = $speed;
        }

    }

    public function stop()
    {
        $this->gSpeed = 0;
    }

    public function reverse($speed)
    {
        $speed = abs($speed) * -1;
        if ($speed < -50) {
            $this->gSpeed = -50;
        } else {
            $this->gSpeed = $speed;
        }

    }

    public function getCost(){
        return $this->cost;
}


}

?>