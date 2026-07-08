<?php // Every PHP file starts with this opening tag.

$userName = "Sara";        // A variable holding the user's name.
$userEmail = "sara@x.com"; // A variable holding the user's email.
$userAge = 30;             // A variable holding the user's age.

// A function that prints a greeting using the user's data.
function greet($name) {            // It takes the name as a parameter.
    echo "Hello, " . $name . "!";  // It prints "Hello, " followed by the name.
}

greet($userName); // We call the function and pass the name into it.