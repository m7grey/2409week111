<?php
//filenme test_car.php
include("Car.php");
$car = new Car();

//$car->speed = $x;
$car->drive(10000);

print_r($car);

?>