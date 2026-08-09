<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

class Student {                                    // Each student object has its own name.
    public string $name;                           // Instance property: one value per object.

    public function __construct(string $name) {    // Set this student's name at birth.
        $this->name = $name;                       // Store on THIS object only.
    }
}

$a = new Student('Ali');                           // Object A has name Ali.
$b = new Student('Sara');                          // Object B has name Sara.

echo $a->name;                                     // Prints: Ali
echo "\n";                                         // New line.
echo $b->name;                                     // Prints: Sara  (different object, different value)