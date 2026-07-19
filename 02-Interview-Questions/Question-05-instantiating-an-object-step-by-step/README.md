# Question 05 - How do you instantiate an object from a class? Explain the step-by-step process of how the object is built and what handles its creation.

Status: Not completed
Related lectures: Lectures 2, 5
Folder: `02-Interview-Questions/Question-05-instantiating-an-object-step-by-step/`

## Interview Question

How do you instantiate an object from a class? Explain the step-by-step process of how the object is built and what handles its creation.

## What The Interviewer Is Testing

Whether you understand object creation beyond writing `new`, including what PHP does for you.

## A Strong Answer Should Cover

- You instantiate with `new ClassName(...)`.
- PHP allocates a new object instance from the class blueprint.
- If `__construct()` exists, PHP calls it to initialize the new object with the given arguments.
- The result is an object handle you can store in a variable and use.

## Practice Task

Walk through creating `$user = new User('Ada');` and explain each step out loud.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `../README.md`.

## Source

Sources: https://www.php.net/manual/en/language.oop5.basic.php, https://www.php.net/manual/en/language.oop5.decon.php
