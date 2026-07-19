# Question 24 - Why can a PHP class implement multiple interfaces but extend only one class?

Status: Not completed
Related lecture: Lecture 14
Folder: `02-Interview-Questions/Question-24-multiple-interfaces-vs-single-inheritance/`

## Interview Question

Why can a PHP class implement multiple interfaces but extend only one class?

## What The Interviewer Is Testing

Whether you understand capability contracts versus inherited implementation.

## A Strong Answer Should Cover

- Interfaces describe capabilities a class promises to provide.
- Extending a class inherits implementation and state from one parent.
- Multiple interfaces let one class advertise several abilities without multiple parent classes.

## Practice Task

Design a class that implements both `Payable` and `Refundable` and explain the meaning.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `../README.md`.

## Source

Source: https://www.php.net/manual/en/language.oop5.interfaces.php
