<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types from now on.

class Car {                                   // The Car blueprint.
    public string $color;                     // A property for the color.

    public function __construct(string $color) { // The constructor runs at creation.
        $this->color = $color;                // Store the passed-in color into this object.
    }                                         // After this runs, the object has its color set.
}