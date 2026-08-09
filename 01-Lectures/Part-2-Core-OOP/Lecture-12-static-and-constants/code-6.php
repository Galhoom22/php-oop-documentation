<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

class Order {                                      // Orders share a next-id counter on the class.
    public const CURRENCY = 'USD';                 // Currency never changes for this app demo.
    private static int $nextId = 1;                // Shared counter for creating ids.

    public private(set) int $id;                   // Each order object gets its own id (from Lecture 9).
    public float $total;                           // Each order has its own total.

    public function __construct(float $total) {    // Create one order.
        $this->id = self::$nextId;                 // Take the current shared id.
        self::$nextId++;                           // Advance the shared counter for the next order.
        $this->total = $total;                     // Store this order's total on the object.
    }

    public function label(): string {              // Build a readable label.
        return 'Order #' . $this->id . ' = ' . $this->total . ' ' . self::CURRENCY;
    }
}

$o1 = new Order(20.0);                             // First order gets id 1.
$o2 = new Order(45.5);                             // Second order gets id 2.

echo $o1->label();                                 // Prints something like: Order #1 = 20 USD
echo "\n";                                         // New line.
echo $o2->label();                                 // Prints something like: Order #2 = 45.5 USD
echo "\n";                                         // New line.
echo Order::CURRENCY;                              // Class constant from outside. Prints: USD