# Question 19 - A static method does not require an object instance to run. How is this managed internally?

Status: Not completed
Related lecture: Lecture 12
Folder: `02-Interview-Questions/Question-19-how-static-methods-work-internally/`

## Interview Question

A static method does not require an object instance to run. How is this managed internally?

## What The Interviewer Is Testing

Whether you understand that static methods are class-level behavior, not instance-level behavior.

## A Strong Answer Should Cover

- The method is stored with the class definition, not with each object.
- Calling `ClassName::method()` resolves the method on the class itself.
- No object allocation is required for that call because there is no per-instance `$this` context.

## Practice Task

Explain why `MathHelper::add(2, 3)` can run even when no `MathHelper` object exists.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `../README.md`.

## Source

Source: https://www.php.net/manual/en/language.oop5.static.php
