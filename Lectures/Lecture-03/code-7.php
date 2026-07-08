<?php // Opening PHP tag.

require 'code-6.php';     // Load the blueprint.

$car = new Car();      // Build a Car.

$car->color = "green"; // Allowed: "green" is a string.
$car->doors = 2;       // Allowed: 2 is an int.

echo $car->color;      // Prints: green
echo $car->doors;      // Prints: 2