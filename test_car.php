<?php
//filenme test_car.php
include("Car.php");
$car = new Car();

//$car->speed = $x;
$car->drive(50);

print_r($car);

?>