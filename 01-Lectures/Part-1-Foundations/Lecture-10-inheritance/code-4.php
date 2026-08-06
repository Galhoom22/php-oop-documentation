<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

require 'code-1.php'; // Load Animal.

class Dog extends Animal {                     // Child trying to reach private data.
    public function revealSecret(): void {     // This method will break on purpose.
        // echo $this->secret;                 // FATAL: private members are NOT inherited for child use.
        echo 'Children cannot read private parent members.'; // Safe message instead.
    }
}

$dog = new Dog('Rex', 'Woof');                 // Create a Dog.
$dog->revealSecret();                          // Prints the safe message.