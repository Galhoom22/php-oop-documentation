# Question 05 - When should you use public, private, and protected?

Status: Not completed
Related lecture: Lecture 6
Folder: `Interview-Questions/Question-05-visibility-public-private-protected/`

## Interview Question

When should you use public, private, and protected?

## What The Interviewer Is Testing

Whether you can protect object internals correctly.

## A Strong Answer Should Cover

- `public` is accessible from outside the object.
- `private` is accessible only inside the same class and is the safest default.
- `protected` is accessible inside the class and child classes, but should not be used without a clear inheritance reason.

## Practice Task

Given a `BankAccount` class, decide which members should be public or private and explain why.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `PHP-OOP-Interview-Questions.md`.

## Source

Source: https://www.php.net/manual/en/language.oop5.visibility.php
