<?php // Opening PHP tag.

require 'Code-1.php'; // Load the file that contains the Car class so we can use it.

$myCar = new Car(); // "new Car()" builds one real Car object in memory.
                    // We store that object in the variable $myCar.

var_dump($myCar);   // Inspect the object. This prints its type and contents.