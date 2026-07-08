<?php // Opening tag.

$user1Name = "Sara";          // Existing.
$user1Email = "sara@x.com";   // Existing.
$user1Age = 30;               // Existing.
$user1Phone = "0100000001";   // NEW: we must add this for user 1.

$user2Name = "Omar";          // Existing.
$user2Email = "omar@x.com";   // Existing.
$user2Age = 25;               // Existing.
$user2Phone = "0100000002";   // NEW: we must add this for user 2 as well.

// Every function that "knows" about a user must now be updated too.
function printUser($name, $email, $age) {   // This signature is now wrong.
    echo $name . " " . $email . " " . $age; // It has no idea phone exists.
}
// To support phone, we must edit this function AND every place that calls it.