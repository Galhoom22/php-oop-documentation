<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

class Counter {                                    // Simple click counter owned by the class.
    public static int $clicks = 0;                 // Shared click count.
    public const LABEL = 'Total clicks';           // Fixed label text.

    public static function click(): void {         // Increase clicks from inside the class.
        self::$clicks++;                           // self:: = "this class" from the inside.
    }

    public static function report(): string {      // Build a report string.
        return self::LABEL . ': ' . self::$clicks; // Read const + static property via self::
    }
}

Counter::click();                                  // Outside: ClassName::method()
Counter::click();                                  // Another click.

echo Counter::report();                            // Prints: Total clicks: 2
echo "\n";                                         // New line.
echo Counter::LABEL;                               // Outside const access. Prints: Total clicks
echo "\n";                                         // New line.
echo Counter::$clicks;                             // Outside static property access. Prints: 2