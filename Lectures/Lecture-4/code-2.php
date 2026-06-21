<?php // Opening PHP tag.

require 'code-1.php';      // Load the Car blueprint.

$car = new Car();       // Build a Car object.
$car->color = "red";    // Put "red" in this car's color box.

$car->describe();       // Call the describe method ON this car.
                        // Prints: This car is red