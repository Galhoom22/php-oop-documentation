# Question 40 - What is the difference between comparing objects with == and ===?

Status: Not completed
Related lecture: Lecture 29
Folder: `02-Interview-Questions/Question-40-object-comparison/`

## Interview Question

What is the difference between comparing objects with `==` and `===`?

## What The Interviewer Is Testing

Whether you understand value comparison versus identity comparison.

## A Strong Answer Should Cover

- `==` compares whether two objects have the same class and property values.
- `===` checks whether two variables point to the exact same object instance.
- Cloned objects can be equal with `==` but not identical with `===`.

## Practice Task

Explain why two cloned objects may pass `==` but fail `===`.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `../README.md`.

## Source

Source: https://www.php.net/manual/en/language.oop5.object-comparison.php
