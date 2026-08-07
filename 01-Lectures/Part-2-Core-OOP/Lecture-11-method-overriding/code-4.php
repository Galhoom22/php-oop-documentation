<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

class ParentBox {                                  // Parent with one method.
    public function label(): void {                // Parent label text.
        echo "Parent label";                       // Print parent text.
    }
}

class ChildBox extends ParentBox {                 // Child overrides label.
    public function label(): void {                // Child version.
        echo "Child label";                        // Print child text.
    }

    public function showBoth(): void {             // Demo of -> vs ::
        $this->label();                            // Calls THIS object's version (Child).
        echo " | ";                                // Separator.
        parent::label();                           // Calls the PARENT class version explicitly.
    }
}

$box = new ChildBox();                             // Create a child box.
$box->showBoth();                                  // Prints: Child label | Parent label