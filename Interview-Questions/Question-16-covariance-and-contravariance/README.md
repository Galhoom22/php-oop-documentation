# Question 16 - What are covariance and contravariance in method overriding?

Status: Not completed
Related lecture: Lecture 17
Folder: `Interview-Questions/Question-16-covariance-and-contravariance/`

## Interview Question

What are covariance and contravariance in method overriding?

## What The Interviewer Is Testing

Whether you understand type safety when child methods replace parent methods.

## A Strong Answer Should Cover

- Covariance allows a child method to return a more specific type.
- Contravariance allows a child method parameter to accept a wider type.
- Both rules protect substitutability between parent and child classes.

## Practice Task

Explain why returning `Dog` instead of `Animal` can be safe in an overridden method.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `PHP-OOP-Interview-Questions.md`.
