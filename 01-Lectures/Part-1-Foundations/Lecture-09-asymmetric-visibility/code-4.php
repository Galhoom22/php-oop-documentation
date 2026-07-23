<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

class Order {                                              // An order with a fixed ID and a changing status.
    public private(set) int $id;                           // Anyone may read the ID; only the class may set it.
    public private(set) string $status;                    // Anyone may read status; only the class may change it.

    public function __construct(int $id) {                 // Birth: assign id once, start as pending.
        $this->id = $id;                                   // Set from inside the class — allowed.
        $this->status = 'pending';                         // Initial status — also from inside.
    }

    public function markPaid(): void {                     // Business action: mark paid.
        $this->status = 'paid';                            // Status changes only through a method.
    }

    public function markShipped(): void {                  // Business action: mark shipped.
        $this->status = 'shipped';                         // Again: write stays inside the class.
    }
}

$order = new Order(1001);                                  // Create order #1001.

echo $order->id;                                           // Public read of id. Prints: 1001
echo "\n";                                                 // New line for clarity.
echo $order->status;                                       // Public read of status. Prints: pending
echo "\n";                                                 // New line.

$order->markPaid();                                        // Controlled update.
$order->markShipped();                                     // Controlled update.

echo $order->status;                                       // Prints: shipped

// $order->id = 9999;                                      // Would fatal: private(set) from outside.
// $order->status = 'hacked';                              // Would fatal: private(set) from outside.