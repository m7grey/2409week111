<?php

// filename Car.php

class Car
{
    private $gSpeed = 0;

    public function drive($speed)
    {
        if ($speed > 130) {
            $this->gSpeed = 130;
        } else {
            $this->gSpeed = $speed;
        }

    }
}

?>