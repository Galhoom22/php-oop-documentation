<?php // Opening PHP tag.

require 'code-1.php';     // Load the Car blueprint.

$car = new Car();      // Build one Car object.

$car->color = "red";   // Use -> to reach the "color" box and put "red" in it.
$car->doors = 4;       // Use -> to reach the "doors" box and put 4 in it.

echo $car->color;      // Read the "color" box back. Prints: red
echo $car->doors;      // Read the "doors" box back. Prints: 4