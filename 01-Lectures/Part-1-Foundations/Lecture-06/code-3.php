<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types.

class BankAccount {                       // Same class, now with a safe door.
    public string $ownerName;             // Public owner name.
    protected string $accountType;        // Protected account type.
    private float $balance;               // Private balance, still locked away.

    public function __construct(string $ownerName, string $accountType, float $balance) { // Constructor.
        $this->ownerName = $ownerName;    // Store owner name.
        $this->accountType = $accountType;// Store account type.
        $this->balance = $balance;        // Store balance.
    }

    public function getBalance(): float { // A public getter: the controlled door to the private safe.
        return $this->balance;            // Inside the class, $this->balance is fully accessible.
    }                                     // Outside code calls this method instead of touching $balance directly.
}

$account = new BankAccount('Sara', 'savings', 500.0); // Create an account.

echo $account->getBalance(); // WORKS: prints 500. We read the balance through the public getter, not directly.