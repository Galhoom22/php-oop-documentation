<?php // Opening PHP tag.

declare(strict_types=1); // Strict types.

class Car {                                              // The Car blueprint.
    public string $color;                                // Color property.
    public int $doors;                                   // Doors property.

    public function __construct(string $color, int $doors) { // Two required values.
        $this->color = $color;                           // Store the color.
        $this->doors = $doors;                           // Store the door count.
    }
}