<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

class Order {                                              // Same order idea, modern syntax.
    public private(set) string $status;                    // Public READ, private WRITE. Must be typed.

    public function __construct(string $status) {          // Constructor still sets the first value.
        $this->status = $status;                           // OK: we are inside the class, so set is allowed.
    }

    public function markShipped(): void {                  // Controlled way to change status later.
        $this->status = 'shipped';                         // OK: still inside the class.
    }
}

$order = new Order('pending');                             // Create the order.

echo $order->status;                                       // Public read works. Prints: pending

$order->markShipped();                                     // Class updates itself.

echo $order->status;                                       // Public read again. Prints: shipped