# Question 23 - Can you instantiate an object directly from an Abstract Class?

Status: Not completed
Related lecture: Lecture 13
Folder: `02-Interview-Questions/Question-23-instantiate-abstract-class/`

## Interview Question

Can you instantiate an object directly from an Abstract Class?

## What The Interviewer Is Testing

Whether you know that abstract classes are incomplete blueprints, not concrete types you can `new`.

## A Strong Answer Should Cover

- No. You cannot instantiate an abstract class directly with `new`.
- An abstract class exists to be extended by concrete child classes.
- You create objects from the concrete children that implement the missing abstract parts.

## Practice Task

Explain why `new PaymentGateway()` would fail if `PaymentGateway` is abstract, and what you would instantiate instead.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `../README.md`.

## Source

Source: https://www.php.net/manual/en/language.oop5.abstract.php
