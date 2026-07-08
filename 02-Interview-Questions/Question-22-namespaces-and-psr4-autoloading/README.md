# Question 22 - How do namespaces and PSR-4 autoloading organize PHP classes?

Status: Not completed
Related lecture: Lecture 23
Folder: `02-Interview-Questions/Question-22-namespaces-and-psr4-autoloading/`

## Interview Question

How do namespaces and PSR-4 autoloading organize PHP classes?

## What The Interviewer Is Testing

Whether you can organize multi-file PHP projects without manual require chaos.

## A Strong Answer Should Cover

- Namespaces prevent class name conflicts by grouping classes under names.
- `use` imports a class name so it can be referenced more cleanly.
- PSR-4 maps namespace prefixes to folder paths so classes can load automatically.

## Practice Task

Map `App\Models\Post` to a likely file path in a PSR-4 project.

## Files You May Create Here

- `code-1.php` for the first code attempt if the answer needs code.
- `code-2.php` for an improved version after feedback.
- `notes.md` for the final interview-style answer in your own words.

## Completion Rule

After you can answer this question clearly and solve the practice task, mark the question with the check mark in `02-PHP-OOP-Interview-Questions.md`.

## Source

Sources: https://www.php.net/manual/en/language.namespaces.php, https://www.php.net/manual/en/function.spl-autoload-register.php
