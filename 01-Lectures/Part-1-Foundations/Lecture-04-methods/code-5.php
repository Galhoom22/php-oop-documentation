<?php // Opening PHP tag.

require 'code-4.php';        // Load the blueprint.

$car = new Car();         // Build a car (color defaults to "white").

$car->describe();         // Prints: This car is white

$car->repaint("green");   // Call repaint, passing "green". This changes $this->color.

$car->describe();         // Prints: This car is green (the object's data changed)