<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

class MathHelper {                                 // A helper class for class-level tools.
    public static function double(int $n): int {   // Static method: belongs to the class.
        return $n * 2;                             // Return twice the number.
    }
}

echo MathHelper::double(5);                        // Call without new. Prints: 10