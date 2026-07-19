# Question 08 - What is a Destructor in PHP, and what is its purpose?

Status: Not completed
Related lecture: Lecture 5
Folder: `02-Interview-Questions/Question-08-destructor-and-purpose/`

## Interview Question

What is a Destructor in PHP, and what is its purpose?

## What The Interviewer Is Testing

Whether you understand object cleanup and when `__destruct()` runs.

## A Strong Answer Should Cover

- `__destruct()` is a special method that runs when an object is destroyed or goes out of scope.
- Its purpose is cleanup work such as releasing resources the object opened.
- In PHP it is used carefully because destruction timing can be less predictable than in some other languages.

## Practice Task

Explain the difference between `__construct()` and `__destruct()` in one short interview answer.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `../README.md`.

## Source

Source: https://www.php.net/manual/en/language.oop5.decon.php
