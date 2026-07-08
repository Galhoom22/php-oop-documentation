Summary
- The constructor (__construct) is a special method that runs automatically when an object is created with new, setting up its essential data at birth.
- Required constructor parameters make it impossible to create a half-built object, which prevents a whole category of bugs.
- Constructor promotion is a PHP 8 shorthand that declares a property and assigns its value in a single line by putting a visibility keyword before the parameter.

Key rule to remember: Put the data an object cannot live without into the constructor, so every object is fully formed the moment it exists.

Common mistake to avoid: Misspelling the constructor. It must be exactly __construct (two underscores); any other name makes it a normal method that does not run automatically.

PHP Manual Reference: https://www.php.net/manual/en/language.oop5.decon.php