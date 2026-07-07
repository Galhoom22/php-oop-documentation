# Question 18 - What are magic methods, and why should they be used carefully?

Status: Not completed
Related lecture: Lecture 19
Folder: `Interview-Questions/Question-18-magic-methods-and-risks/`

## Interview Question

What are magic methods, and why should they be used carefully?

## What The Interviewer Is Testing

Whether you know PHP's automatic object hooks and their readability cost.

## A Strong Answer Should Cover

- Magic methods are called automatically by PHP in special situations.
- Common examples include `__toString`, `__get`, `__set`, `__call`, and `__destruct`.
- Overusing them can hide behavior and make code harder to debug.

## Practice Task

Explain one valid use for `__toString()` and one risk of using `__get()` heavily.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `PHP-OOP-Interview-Questions.md`.
