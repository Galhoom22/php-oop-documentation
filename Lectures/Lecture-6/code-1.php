<?php // Opening PHP tag.

declare(strict_types=1); // Enforce strict types, as we have since Lecture 5.

class BankAccount {                       // A blueprint for a bank account.
    public string $ownerName;             // Public: anyone may read or change this.
    protected string $accountType;        // Protected: this class and its children only.
    private float $balance;               // Private: only this class can touch it.

    public function __construct(string $ownerName, string $accountType, float $balance) { // Set up the account at birth.
        $this->ownerName = $ownerName;    // Store the owner name on this object.
        $this->accountType = $accountType;// Store the account type on this object.
        $this->balance = $balance;        // Store the starting balance on this object.
    }                                     // After this runs, all three properties are set.
}