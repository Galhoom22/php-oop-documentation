# Question 27 - What is a lazy object, and why can it improve performance?

Status: Not completed
Related lecture: Lecture 28
Folder: `02-Interview-Questions/Question-27-lazy-objects/`

## Interview Question

What is a lazy object, and why can it improve performance?

## What The Interviewer Is Testing

Whether you understand delayed object setup.

## A Strong Answer Should Cover

- A lazy object delays expensive setup until it is actually needed.
- This can save memory or time when the object might never be used.
- Lazy behavior should stay predictable and should not hide important side effects.

## Practice Task

Explain why a database connection may be created lazily.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `../README.md`.

## Source

Source: https://www.php.net/manual/en/language.oop5.lazy-objects.php
