<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

require 'code-2.php'; // Load the Order class with asymmetric visibility.

$order = new Order('pending'); // Create an order.

echo $order->status;           // OK: public read. Prints: pending

$order->status = 'cancelled';  // FATAL: cannot modify private(set) property from outside the class.