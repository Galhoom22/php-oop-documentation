<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

class Person {                              // Same idea, now protected.
    private int $age;                       // Private: outside code cannot touch this directly.

    public function setAge(int $newAge): void { // The controlled door for changing age.
        if ($newAge < 0) {                  // Validation: reject impossible values.
            throw new InvalidArgumentException('Age cannot be negative.'); // Stop bad data at the door.
        }
        $this->age = $newAge;               // Only valid data reaches the private property.
    }                                       // void means this method returns nothing.

    public function getAge(): int {         // The controlled door for reading age.
        return $this->age;                  // Hand out the private value safely.
    }
}

$person = new Person();                     // Create a person object.

$person->setAge(30);                        // WORKS: 30 is valid, so it is stored.

echo $person->getAge();                     // Prints 30.