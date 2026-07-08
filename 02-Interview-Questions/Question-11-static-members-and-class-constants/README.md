# Question 11 - What is the difference between static members and class constants?

Status: Not completed
Related lecture: Lecture 12
Folder: `02-Interview-Questions/Question-11-static-members-and-class-constants/`

## Interview Question

What is the difference between static members and class constants?

## What The Interviewer Is Testing

Whether you know what belongs to the class itself instead of one object.

## A Strong Answer Should Cover

- Static properties and methods belong to the class, not a specific object.
- Class constants are fixed values that cannot change.
- Use static state carefully because shared mutable state can make code harder to test.

## Practice Task

Give one example of a good class constant and one example where a static property could be risky.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `../README.md`.

## Source

Source: https://www.php.net/manual/en/language.oop5.static.php
