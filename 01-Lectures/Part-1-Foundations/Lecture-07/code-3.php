<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

require 'code-2.php'; // Load the Person class from the second block.

$person = new Person();      // Create a person.

$person->setAge(-50);        // REJECTED: the setter throws because -50 fails validation.

echo $person->getAge();      // This line never runs; the program stopped at the bad setAge call.