<?php // Opening PHP tag.

declare(strict_types=1); // Strict types here too.

require 'code-1.php';       // Load the Car blueprint.

$car = new Car("red");   // Build a Car AND pass "red" into the constructor.
                         // The constructor sets $this->color = "red" immediately.

echo $car->color;        // Prints: red (the object was born fully set up)