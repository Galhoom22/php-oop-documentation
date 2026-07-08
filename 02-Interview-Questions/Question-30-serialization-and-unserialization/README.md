# Question 30 - What is object serialization, and what should you be careful about?

Status: Not completed
Related lecture: Lecture 29
Folder: `02-Interview-Questions/Question-30-serialization-and-unserialization/`

## Interview Question

What is object serialization, and what should you be careful about?

## What The Interviewer Is Testing

Whether you know how objects become strings for storage or transfer and the risks involved.

## A Strong Answer Should Cover

- Serialization converts an object into a storable string representation.
- Unserialization converts that string back into an object.
- Unserializing untrusted data can be dangerous and should be avoided.

## Practice Task

Explain one safe use case and one security risk of `unserialize()`.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `../README.md`.

## Source

Source: https://www.php.net/manual/en/language.oop5.serialization.php
