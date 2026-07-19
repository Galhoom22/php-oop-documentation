# Question 10 - If a constructor is private, how can you instantiate an object of that class?

Status: Not completed
Related lectures: Lectures 5-6, 12
Folder: `02-Interview-Questions/Question-10-instantiate-with-private-constructor/`

## Interview Question

If a constructor is private, how can you instantiate an object of that class?

## What The Interviewer Is Testing

Whether you know controlled creation through methods that still run inside the class.

## A Strong Answer Should Cover

- Outside code cannot call `new` on that class directly.
- A public static method inside the class can still create the object because it has access to the private constructor.
- Common pattern: a static factory method such as `create()` or `getInstance()` that returns the object.

## Practice Task

Describe how `User::create('Ada')` could work when `__construct` is private.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `../README.md`.

## Source

Sources: https://www.php.net/manual/en/language.oop5.decon.php, https://www.php.net/manual/en/language.oop5.visibility.php, https://www.php.net/manual/en/language.oop5.static.php
