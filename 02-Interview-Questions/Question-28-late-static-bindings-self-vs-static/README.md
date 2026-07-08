# Question 28 - What is the difference between `self::` and `static::`?

Status: Not completed
Related lecture: Lecture 29
Folder: `02-Interview-Questions/Question-28-late-static-bindings-self-vs-static/`

## Interview Question

What is the difference between `self::` and `static::`?

## What The Interviewer Is Testing

Whether you understand late static bindings in inherited static calls.

## A Strong Answer Should Cover

- `self::` refers to the class where the method is written.
- `static::` refers to the class that was actually called at runtime.
- Late static binding helps child classes customize static behavior inherited from a parent.

## Practice Task

Predict the output when a parent method uses `self::NAME` versus `static::NAME`.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `../README.md`.

## Source

Source: https://www.php.net/manual/en/language.oop5.late-static-bindings.php
