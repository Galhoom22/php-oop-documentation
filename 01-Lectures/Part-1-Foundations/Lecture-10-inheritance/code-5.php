<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

class Animal {                                 // Parent with a constructor.
    public string $name;                       // Every animal has a name.

    public function __construct(string $name) { // Parent birth setup.
        $this->name = $name;                   // Store the name.
        echo "Animal ready\n";                 // Proof the parent constructor ran.
    }
}

class Dog extends Animal {                     // Child with ITS OWN constructor.
    public string $breed;                      // Extra dog-only property.

    public function __construct(string $name, string $breed) { // Child birth setup.
        parent::__construct($name);            // MUST call parent constructor yourself.
        $this->breed = $breed;                 // Then set dog-only data.
        echo "Dog ready\n";                    // Proof the child constructor ran.
    }
}

$dog = new Dog('Rex', 'Labrador');             // Creates Dog; both messages should print.
echo $dog->name . ' is a ' . $dog->breed;      // Prints: Rex is a Labrador