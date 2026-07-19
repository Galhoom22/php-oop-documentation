# Lecture 05 — Constructor (Milestone)

> Your quick recap after finishing this lecture.

---

## What you learned

1. The constructor (`__construct`) is a special method that runs automatically when an object is created with `new`, setting up its essential data at birth.
2. Required constructor parameters make it impossible to create a half-built object, which prevents a whole category of bugs.
3. Constructor promotion is a PHP 8 shorthand that declares a property and assigns its value in a single line by putting a visibility keyword before the parameter.

---

## Key rule

> Put the data an object cannot live without into the constructor, so every object is fully formed the moment it exists.

---

## Watch out

Avoid this common mistake — misspelling the constructor. It must be exactly `__construct` (two underscores); any other name makes it a normal method that does not run automatically.

---

## Official reference

[PHP Manual — Constructors and Destructors](https://www.php.net/manual/en/language.oop5.decon.php)
