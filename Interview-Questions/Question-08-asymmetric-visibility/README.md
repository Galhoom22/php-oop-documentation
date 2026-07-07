# Question 08 - What is asymmetric visibility, and when is it useful?

Status: Not completed
Related lecture: Lecture 9
Folder: `Interview-Questions/Question-08-asymmetric-visibility/`

## Interview Question

What is asymmetric visibility, and when is it useful?

## What The Interviewer Is Testing

Whether you can expose reading without exposing writing.

## A Strong Answer Should Cover

- Asymmetric visibility can make a property publicly readable but privately writable.
- It reduces boilerplate when outside code should read a value but not change it.
- It supports stronger encapsulation while keeping the object easy to use.

## Practice Task

Explain why an order ID should usually be readable from outside but not writable from outside.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `PHP-OOP-Interview-Questions.md`.

## Source

Source: https://www.php.net/manual/en/language.oop5.visibility.php
