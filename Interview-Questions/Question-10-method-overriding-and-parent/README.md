# Question 10 - What is method overriding, and why would you call `parent::method()`?

Status: Not completed
Related lecture: Lecture 11
Folder: `Interview-Questions/Question-10-method-overriding-and-parent/`

## Interview Question

What is method overriding, and why would you call `parent::method()`?

## What The Interviewer Is Testing

Whether you can extend inherited behavior without losing the original behavior.

## A Strong Answer Should Cover

- Overriding means a child class defines a method with the same name as the parent method.
- `parent::method()` calls the parent version from inside the child method.
- This is useful when the child adds behavior before or after the parent behavior.

## Practice Task

Describe a child logger that adds file writing while still using the parent logging format.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `PHP-OOP-Interview-Questions.md`.
