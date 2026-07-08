<?php // Opening PHP tag.

class Car {                              // The Car blueprint.
    public string $color = "white";      // This car's color.

    public function repaint(string $newColor) { // Method takes a new color as input.
        $this->color = $newColor;        // Put the new color into THIS object's box.
    }                                    // It changes the calling object's own data.

    public function describe() {         // Method to read the color.
        echo "This car is " . $this->color; // Reads THIS object's color.
    }
}