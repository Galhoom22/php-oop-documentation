<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

class Vehicle {                                // One possible parent.
    public function move(): void {             // Shared vehicle behavior.
        echo "Moving...\n";                    // Print movement.
    }
}

class Machine {                                // Another unrelated parent idea.
    public function powerOn(): void {          // Different shared behavior.
        echo "Power on\n";                     // Print power.
    }
}

class Car extends Vehicle {                    // OK: one parent only.
    public function honk(): void {             // Car-only behavior.
        echo "Beep!\n";                        // Print horn.
    }
}

// class Car extends Vehicle, Machine {}       // ILLEGAL in PHP: no multiple inheritance.

$car = new Car();                              // Create a Car.
$car->move();                                  // Inherited from Vehicle.
$car->honk();                                  // Own method.