<?php // Opening PHP tag.

declare(strict_types=1); // Strict types.

require 'code-6.php';         // Load the blueprint.

$car = new Car("black", 4); // Same usage as before.

echo $car->color;           // Prints: black
echo $car->doors;           // Prints: 4