# Question 20 - What do `final` and `clone` do in PHP OOP?

Status: Not completed
Related lecture: Lecture 21
Folder: `Interview-Questions/Question-20-final-keyword-and-cloning/`

## Interview Question

What do `final` and `clone` do in PHP OOP?

## What The Interviewer Is Testing

Whether you know how to prevent extension and create object copies.

## A Strong Answer Should Cover

- A final class cannot be extended.
- A final method cannot be overridden by child classes.
- `clone` creates a separate object, and `__clone()` can customize copy behavior.

## Practice Task

Explain why cloning an object with another object inside it can require a deep copy.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `PHP-OOP-Interview-Questions.md`.

## Source

Sources: https://www.php.net/manual/en/language.oop5.final.php, https://www.php.net/manual/en/language.oop5.cloning.php
