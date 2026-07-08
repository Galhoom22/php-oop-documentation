<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

class Product {                              // A blueprint for a product.
    private float $price;                     // Private price, hidden from outside.

    public function setPrice(float $newPrice): void { // Setter method: the controlled door for writing.
        if ($newPrice < 0) {                  // Validation: reject negative prices.
            throw new InvalidArgumentException('Price cannot be negative.'); // Stop bad data.
        }
        $this->price = $newPrice;             // Store only if validation passed.
    }

    public function getPrice(): float {     // Getter method: the controlled door for reading.
        return $this->price;                  // Hand out the stored price.
    }
}

$product = new Product();                     // Create a product object.

$product->setPrice(99.99);                    // Change price through the setter method.

echo $product->getPrice();                    // Read price through the getter method. Prints 99.99.