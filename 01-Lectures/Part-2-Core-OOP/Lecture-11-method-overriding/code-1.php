<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

class Cook {                                       // Parent: knows a basic pancake recipe.
    public function makePancakes(): void {         // Shared recipe name.
        echo "Mix flour, eggs, milk. Cook on pan."; // Classic steps only.
    }
}

$cook = new Cook();                                // Create a basic cook.
$cook->makePancakes();                             // Prints the classic recipe.