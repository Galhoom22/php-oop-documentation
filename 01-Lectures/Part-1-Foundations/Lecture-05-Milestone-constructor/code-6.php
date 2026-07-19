<?php // Opening PHP tag.

declare(strict_types=1); // Strict types.

class Car {                                              // The Car blueprint.
    public function __construct(                         // The constructor.
        public string $color,                            // Declares AND fills the $color property.
        public int $doors,                               // Declares AND fills the $doors property.
    ) {}                                                 // Empty body: PHP does the assigning for us.
}