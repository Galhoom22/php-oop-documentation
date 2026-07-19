<?php // Opening PHP tag.

require 'code-1.php';       // Load the blueprint.

$carA = new Car();       // First car.
$carB = new Car();       // Second car.

$carA->color = "red";    // carA is red.
$carB->color = "blue";   // carB is blue.

$carA->describe();       // $this is carA. Prints: This car is red
$carB->describe();       // $this is carB. Prints: This car is blue