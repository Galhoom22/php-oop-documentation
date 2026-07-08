<?php // Opening PHP tag.

declare(strict_types=1); // Strict types.

require 'code-4.php';        // Load the blueprint.

$car = new Car("blue", 2); // "blue" goes to $color, 2 goes to $doors, in order.

echo $car->color;          // Prints: blue
echo $car->doors;          // Prints: 2