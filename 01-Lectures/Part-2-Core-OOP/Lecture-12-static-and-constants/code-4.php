<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

class School {                                     // School info that must stay fixed.
    public const NAME = 'Green Valley School';     // Class constant: set once, never changes.
    public static int $studentCount = 0;           // Static property: can still change over time.

    public static function enroll(): void {        // Increase the shared student count.
        self::$studentCount++;                     // Static property can be updated.
        // self::NAME = 'Other';                  // ILLEGAL if uncommented: constants cannot change.
    }
}

echo School::NAME;                                 // Read constant: ClassName::NAME (no $). Prints school name.
echo "\n";                                         // New line.

School::enroll();                                  // Call static method.
School::enroll();                                  // Call again.

echo School::$studentCount;                        // Static property changed. Prints: 2