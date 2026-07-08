# Question 14 - How does polymorphism work with type hints in PHP?

Status: Not completed
Related lecture: Lecture 15
Folder: `02-Interview-Questions/Question-14-polymorphism-with-type-hints/`

## Interview Question

How does polymorphism work with type hints in PHP?

## What The Interviewer Is Testing

Whether you can use one interface or parent type for many concrete classes.

## A Strong Answer Should Cover

- A function can type-hint an interface or abstract class.
- Different objects can be passed to the same function if they satisfy that type.
- The caller does not need long conditionals for every concrete class.

## Practice Task

Explain how Email, SMS, and Push notification classes can be sent through one function.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `../README.md`.

## Source

Source: https://www.php.net/manual/en/language.oop5.interfaces.php
