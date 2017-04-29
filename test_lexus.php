<?php
//filename test_car.php
include("Lexus.php");
$car = new Lexus();
$car->drive(10000);

echo "<pre>";
print_r($car);
echo "<hr />";
?>