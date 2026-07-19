# Question 20 - What is the difference in memory (RAM) allocation between instantiating an object and calling a static method?

Status: Not completed
Related lectures: Lectures 2, 12
Folder: `02-Interview-Questions/Question-20-memory-object-vs-static-method/`

## Interview Question

What is the difference in memory (RAM) allocation between instantiating an object and calling a static method?

## What The Interviewer Is Testing

Whether you understand the cost of creating an instance versus calling class-level behavior.

## A Strong Answer Should Cover

- Instantiating an object allocates memory for a new instance and its own property values.
- Calling a static method uses the already-loaded class definition and does not create a new object for that call.
- Many objects from the same class each have their own instance memory; static calls do not create that per-object memory.

## Practice Task

Compare `$u = new User(); $u->name();` with `User::count()` in terms of what memory is created.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `../README.md`.

## Source

Sources: https://www.php.net/manual/en/language.oop5.basic.php, https://www.php.net/manual/en/language.oop5.static.php
