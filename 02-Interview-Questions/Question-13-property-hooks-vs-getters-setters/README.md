# Question 13 - How do PHP property hooks compare to traditional getters and setters?

Status: Not completed
Related lecture: Lecture 8
Folder: `02-Interview-Questions/Question-13-property-hooks-vs-getters-setters/`

## Interview Question

How do PHP property hooks compare to traditional getters and setters?

## What The Interviewer Is Testing

Whether you know modern PHP 8.4 encapsulation syntax.

## A Strong Answer Should Cover

- Property hooks attach `get` or `set` behavior directly to a property.
- They can keep normal property access while still running validation or formatting.
- Traditional getter and setter methods are still useful when explicit method names make the API clearer.

## Practice Task

Show when a `set` hook would be cleaner than a `setName()` method.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `../README.md`.

## Source

Source: https://www.php.net/manual/en/language.oop5.property-hooks.php
