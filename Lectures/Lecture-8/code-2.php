<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

class Product {                              // Same product idea, modern syntax.
    public float $price {                     // A public property with hooks attached.
        get => $this->price;                  // Get hook: runs on read; here we return the stored value as-is.
        set {                                 // Set hook: runs on write; block form for validation logic.
            if ($value < 0) {                 // $value is the incoming number being assigned.
                throw new InvalidArgumentException('Price cannot be negative.'); // Reject bad data.
            }
            $this->price = $value;            // Store the validated value into the property.
        }
    }
}

$product = new Product();                     // Create a product object.

$product->price = 99.99;                      // Looks like normal property access, but the set hook runs first.

echo $product->price;                           // Looks like normal property read, but the get hook runs first. Prints 99.99.