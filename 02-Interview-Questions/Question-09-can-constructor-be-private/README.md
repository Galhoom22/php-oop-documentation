# Question 09 - Can a constructor be private?

Status: Not completed
Related lectures: Lectures 5-6
Folder: `02-Interview-Questions/Question-09-can-constructor-be-private/`

## Interview Question

Can a constructor be private?

## What The Interviewer Is Testing

Whether you understand constructor visibility and controlled object creation.

## A Strong Answer Should Cover

- Yes, a constructor can be `private` (or `protected`).
- A private constructor blocks normal `new ClassName()` usage from outside the class.
- This is used when the class itself should control how instances are created.

## Practice Task

Explain one reason a class might make its constructor private.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `../README.md`.

## Source

Sources: https://www.php.net/manual/en/language.oop5.decon.php, https://www.php.net/manual/en/language.oop5.visibility.php
