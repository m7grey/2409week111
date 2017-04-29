<?php

// filename Car.php

class Car
{
    private $speed = 0;
    public function drive($speed)
    {
        if ($speed > 130) {
            $this->speed = 130;
        }

    }
}

?>