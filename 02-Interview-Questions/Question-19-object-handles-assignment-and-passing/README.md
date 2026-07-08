# Question 19 - What happens when you assign or pass an object in PHP?

Status: Not completed
Related lecture: Lecture 20
Folder: `02-Interview-Questions/Question-19-object-handles-assignment-and-passing/`

## Interview Question

What happens when you assign or pass an object in PHP?

## What The Interviewer Is Testing

Whether you understand object variables hold handles to the same object.

## A Strong Answer Should Cover

- Assigning an object variable copies the handle, not the full object.
- Two variables can point to the same object.
- Changing the object through one variable is visible through the other variable.

## Practice Task

Predict the result when `$b = $a;` and then `$b->name` changes.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `../README.md`.

## Source

Source: https://www.php.net/manual/en/language.oop5.references.php
