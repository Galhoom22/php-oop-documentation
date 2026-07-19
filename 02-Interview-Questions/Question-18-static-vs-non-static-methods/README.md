# Question 18 - What is the difference between static and non-static methods?

Status: Not completed
Related lecture: Lecture 12
Folder: `02-Interview-Questions/Question-18-static-vs-non-static-methods/`

## Interview Question

What is the difference between static and non-static methods?

## What The Interviewer Is Testing

Whether you know which methods belong to the class and which belong to one object instance.

## A Strong Answer Should Cover

- A non-static method belongs to an object instance and can use `$this`.
- A static method belongs to the class itself and is called with `ClassName::method()`.
- Static methods should not depend on one object's private state as if `$this` were available.

## Practice Task

Give one good example for a static method and one good example for a non-static method.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `../README.md`.

## Source

Source: https://www.php.net/manual/en/language.oop5.static.php
