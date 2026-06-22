<?php // Opening PHP tag.

declare(strict_types=1); // Strict types.

require 'code-1.php';       // Load the blueprint.

$car = new Car();        // ERROR: the constructor requires a color, but none was given.
                         // PHP stops: "Too few arguments to function Car::__construct()".