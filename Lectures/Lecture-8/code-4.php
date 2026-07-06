<?php

class Product{
    public float $price {                     // Property with both hooks.
        get => '$' . number_format($this->price, 2); // Get hook: format as currency when read.
        set {                                 // Set hook: validate before storing.
            if ($value < 0) {                 // Reject negative values.
                throw new InvalidArgumentException('Price cannot be negative.');
            }
            $this->price = $value;            // Store the raw number.
        }
    }
}