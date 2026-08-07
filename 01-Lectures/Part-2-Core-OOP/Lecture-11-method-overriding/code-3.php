<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

class Cook {                                       // Parent again, standalone for this demo.
    public function makePancakes(): void {         // Classic recipe.
        echo "Classic batter cooked. ";            // Parent step.
    }
}

class Chef extends Cook {                          // Child wants classic + extras.
    public function makePancakes(): void {         // Override the same method name.
        parent::makePancakes();                    // Run the parent's version first.
        echo "Then add chocolate chips.";          // Child adds its own step after.
    }
}

$chef = new Chef();                                // Create a Chef.
$chef->makePancakes();                             // Prints both: classic, then chips.