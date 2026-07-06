<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

class Person {                  // A blueprint for a person.
    public int $age;            // Public age: anyone can set this to anything.
}

$person = new Person();         // Create a person object.

$person->age = -50;             // PROBLEM: -50 is accepted. A person cannot be -50 years old.

echo $person->age;              // Prints -50. The object is now in a broken, nonsensical state.