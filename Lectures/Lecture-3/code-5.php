<?php // Opening PHP tag.

require 'code-4.php';   // Load the blueprint.

$car = new Car();    // Build a Car. We do NOT set anything.

echo $car->color;    // Prints: white (the default value)
echo $car->doors;    // Prints: 4     (the default value)