<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

class Animal {                                 // Parent: a general living creature.
    public string $name;                       // Public: child and outside can use this.
    protected string $sound;                   // Protected: child can use; outside cannot.
    private string $secret = 'DNA';           // Private: ONLY Animal itself can use this.

    public function __construct(string $name, string $sound) { // Birth setup for any animal.
        $this->name = $name;                   // Store the animal's name.
        $this->sound = $sound;                 // Store the sound (for child methods later).
    }

    public function speak(): void {            // Public behavior every animal can do.
        echo $this->name . ' says: ' . $this->sound; // Print name and sound.
    }
}

$animal = new Animal('Generic', '???');        // Create a plain Animal.
$animal->speak();                              // Prints: Generic says: ???