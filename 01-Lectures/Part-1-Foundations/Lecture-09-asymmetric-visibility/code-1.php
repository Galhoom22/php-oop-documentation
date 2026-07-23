<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types, as we have since Lecture 5.

class Order {                                    // Blueprint for an order.
    private string $status;                      // Hidden: outside code cannot touch this directly.

    public function __construct(string $status) { // Set status only at birth (for this simple demo).
        $this->status = $status;                 // Store the starting status inside the object.
    }

    public function getStatus(): string {        // Public door for READING only.
        return $this->status;                    // Hand out the value; no public way to change it.
    }

    public function markShipped(): void {        // Public door for a controlled CHANGE.
        $this->status = 'shipped';               // Only the class decides when status becomes shipped.
    }
}

$order = new Order('pending');                   // Create an order that starts as pending.

echo $order->getStatus();                        // Read through the getter. Prints: pending

$order->markShipped();                           // Ask the order to update itself safely.

echo $order->getStatus();                        // Read again. Prints: shipped