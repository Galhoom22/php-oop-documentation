# Question 34 - When should you use an enum instead of strings or class constants?

Status: Not completed
Related lecture: Lecture 24
Folder: `02-Interview-Questions/Question-34-enums-and-valid-states/`

## Interview Question

When should you use an enum instead of strings or class constants?

## What The Interviewer Is Testing

Whether you can model a fixed set of valid states safely.

## A Strong Answer Should Cover

- Enums represent a fixed set of named valid values.
- They prevent invalid strings like typos from entering the domain.
- Backed enums can convert between enum cases and raw string or integer values.

## Practice Task

Explain why task status is safer as an enum than as free text.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `../README.md`.

## Source

Source: https://www.php.net/manual/en/language.enumerations.php
