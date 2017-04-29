<?php
//filenme test_car.php
include("Car.php");
$car = new Car();


//$car->speed = $x;
$car->drive(10000);


$car2 = new Car();
$car2->drive(30);

print_r($car);
echo "<hr />";
print_r($car2);

$car->stop();
echo "<hr />";
print_r($car);
//question
?>