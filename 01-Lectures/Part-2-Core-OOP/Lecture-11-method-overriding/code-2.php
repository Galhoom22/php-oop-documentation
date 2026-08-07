<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

require 'code-1.php'; // Load the Cook parent class.

class Chef extends Cook {                          // Child cook with a custom recipe.
    public function makePancakes(): void {         // SAME method name = override.
        echo "Mix batter, add chocolate chips, cook."; // Child version replaces parent for Chef.
    }
}

$chef = new Chef();                                // Create a Chef.
$chef->makePancakes();                             // Runs Chef's version, not Cook's.