<?php // Opening PHP tag.

class Car {                          // The Car blueprint.
    public string $color = "white";  // A property holding this car's color.

    public function describe() {     // Define a method named "describe".
        echo "This car is " . $this->color; // $this->color = the color of THIS object.
    }                                // The method reads the calling object's own color.
}