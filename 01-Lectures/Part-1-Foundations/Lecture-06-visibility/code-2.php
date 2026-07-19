<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

require 'code-1.php'; // Load the BankAccount class from the first block.

$account = new BankAccount('Sara', 'savings', 500.0); // Create one account object.

echo $account->ownerName; // WORKS: ownerName is public, readable from outside.

echo $account->balance;   // FATAL ERROR: balance is private, off-limits from outside.