<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

require 'code-1.php'; // Load Animal.

class Dog extends Animal {                     // Child again, now using protected data.
    public function describeSound(): void {    // New method that needs the protected property.
        echo $this->name . ' sound is: ' . $this->sound; // OK: child may read protected $sound.
    }
}

$dog = new Dog('Rex', 'Woof');                 // Create a Dog.
$dog->describeSound();                         // Prints: Rex sound is: Woof

// echo $dog->sound;                           // FATAL if uncommented: protected from outside.