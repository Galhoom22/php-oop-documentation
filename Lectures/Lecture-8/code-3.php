<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

require 'code-2.php'; // Load the Product class with property hooks.

$product = new Product();      // Create a product.

$product->price = -100;        // REJECTED: set hook throws because -100 fails validation.

echo $product->price;          // Never runs; program stopped at the bad assignment.