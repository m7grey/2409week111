<?php
//filenme test_car.php
include("Car.php");
$car = new Car();

$x= 10000;
if ($x > 130) {
    $x = 130;
}
$car->speed = $x;
$car->drive(50);

print_r($car);

?>