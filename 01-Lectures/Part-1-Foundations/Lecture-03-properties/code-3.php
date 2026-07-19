<?php // Opening PHP tag.

require 'code-1.php';      // Load the blueprint.

$carA = new Car();      // First Car object.
$carB = new Car();      // Second, separate Car object.

$carA->color = "red";   // Set carA's color box to "red".
$carB->color = "blue";  // Set carB's color box to "blue".

echo $carA->color;      // Prints: red  (carA kept its own value)
echo $carB->color;      // Prints: blue (carB kept its own value, untouched by carA)