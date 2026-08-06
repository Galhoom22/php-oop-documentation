<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

require 'code-1.php'; // Load the Animal parent class.

class Dog extends Animal {                     // Child: Dog IS-A Animal (inherits from Animal).
    public function wagTail(): void {          // Dog-only behavior (not every Animal has this).
        echo $this->name . ' wags its tail.';  // Uses inherited public $name from Animal.
    }
}

$dog = new Dog('Rex', 'Woof');                 // Create a Dog; constructor came from Animal.
$dog->speak();                                 // Inherited method from Animal. Prints: Rex says: Woof
echo "\n";                                     // New line.
$dog->wagTail();                               // Dog's own method. Prints: Rex wags its tail.