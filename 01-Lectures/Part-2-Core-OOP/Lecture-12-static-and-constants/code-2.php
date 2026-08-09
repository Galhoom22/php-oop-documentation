<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

class Classroom {                                  // The classroom owns one shared scoreboard.
    public static int $score = 0;                  // Static property: ONE value for the whole class.

    public string $name;                           // Instance property: each student still has a name.

    public function __construct(string $name) {    // Create one student object.
        $this->name = $name;                       // Store this student's name on the object.
    }

    public function addPoint(): void {             // Any student can update the shared board.
        self::$score++;                            // Inside the class, use self::$score (note the $).
    }
}

$ali = new Classroom('Ali');                       // Student object 1.
$sara = new Classroom('Sara');                     // Student object 2.

$ali->addPoint();                                  // Ali adds 1 point to the shared board.
$sara->addPoint();                                 // Sara adds 1 more point to the SAME board.

echo Classroom::$score;                            // From outside: ClassName::$property. Prints: 2