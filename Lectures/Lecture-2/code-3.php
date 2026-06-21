<?php // Opening PHP tag.

require 'Code-1.php'; // Load the Car blueprint.

$carA = new Car(); // Build the first Car object.
$carB = new Car(); // Build a second, completely separate Car object.
$carC = new Car(); // Build a third one.

var_dump($carA); // object(Car)#1 - the first car, memory ID 1.
var_dump($carB); // object(Car)#2 - a different car, memory ID 2.
var_dump($carC); // object(Car)#3 - another different car, memory ID 3.