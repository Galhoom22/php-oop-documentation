---
name: php-oop-interview-questions
purpose: >
  This file has exactly one purpose: to serve as the single learning source for
  realistic PHP OOP interview questions after the PHP OOP lectures are complete.
scope: >
  This file should only contain interview-question guidance, progress, practice
  rules, and folder conventions related to PHP OOP interview preparation.
description: >
  Structured, iterative interview-preparation skill for PHP OOP. Trigger this
  skill when the student wants PHP OOP interview questions, asks to practice
  interview answers, says "next interview question", or wants to review common
  real-world PHP OOP questions after finishing the lecture track.
triggers:
  - user asks for PHP OOP interview questions
  - user wants to practice PHP OOP interview answers
  - user says "next interview question"
  - user asks what PHP OOP questions can appear in interviews
  - user wants code-based PHP OOP interview practice
---

# PHP OOP Interview Questions (PHP 8.5+) - Iterative Practice Track

## Who This Is For

Student profile: finished or is close to finishing the PHP OOP lecture track, understands basic PHP syntax, and wants to prepare for realistic PHP OOP interview questions.

---

## Interview Questions Track (31 Questions, One Per Session)

Start this track only after Lecture 31 in `../01-Lectures/README.md` is complete. It prepares the student for realistic PHP OOP interview questions. Deliver exactly one interview question per session unless the student explicitly asks to continue.

Every interview question must be handled like a lecture:
- Understand the question first.
- Explain what the interviewer is really testing.
- Build the answer step by step.
- Write code only when the answer genuinely needs code.
- Ask one CHECK task at the end.
- Mark the question with ✅ only after the student can answer it clearly and pass the practice task.
- Always keep a `Source:` line at the end of each question folder's `README.md`, pointing to the reference used for that question.

This track stays inside PHP OOP. Do not teach design patterns, SOLID, or broad OOD theory here; those belong to the separate OOD course.

### Interview Track Review Checklist

Use this checklist before moving from the interview-question track to the final project.

```
- [ ] Every interview question from 1 to 31 is marked with ✅ in the progress list.
- [ ] Every question folder has a `README.md`.
- [ ] Every question folder `README.md` ends with a `Source:` or `Sources:` line.
- [ ] Every completed question folder has `Status: Completed`.
- [ ] The student can answer each question out loud in interview style.
- [ ] The student can explain the code-based questions without copying the answer.
- [ ] The student can connect each interview question back to the related lecture.
- [ ] The student has written `notes.md` for any question that felt difficult.
- [ ] Weak questions were repeated until the student could answer clearly and confidently.
```

Do not start `../03-Final-Project/README.md` until this checklist is complete.

### Interview Question Progress

```
Question 01 - Why use OOP in PHP instead of only functions?
Question 02 - What is the difference between a class and an object?
Question 03 - What is the difference between properties and methods?
Question 04 - What is a constructor, and why is constructor promotion useful?
Question 05 - When should you use public, private, and protected?
Question 06 - What is encapsulation, and how does it protect data?
Question 07 - How do PHP property hooks compare to traditional getters and setters?
Question 08 - What is asymmetric visibility, and when is it useful?
Question 09 - What is inheritance, and when can it become a bad choice?
Question 10 - What is method overriding, and why would you call parent::method()?
Question 11 - What is the difference between static members and class constants?
Question 12 - What is the difference between an abstract class and an interface?
Question 13 - Why can a PHP class implement multiple interfaces but extend only one class?
Question 14 - How does polymorphism work with type hints in PHP?
Question 15 - Why are type declarations and return types important in OOP PHP?
Question 16 - What are covariance and contravariance in method overriding?
Question 17 - What are traits, and how do you resolve trait method conflicts?
Question 18 - What are magic methods, and why should they be used carefully?
Question 19 - What happens when you assign or pass an object in PHP?
Question 20 - What do final and clone do in PHP OOP?
Question 21 - What are readonly classes, and why is immutability useful?
Question 22 - How do namespaces and PSR-4 autoloading organize PHP classes?
Question 23 - When should you use an enum instead of strings or class constants?
Question 24 - How do exceptions work in OOP PHP, and when should you create a custom exception?
Question 25 - What are PHP attributes, and what problem do they solve?
Question 26 - When would you use an anonymous class, and how does object iteration work?
Question 27 - What is a lazy object, and why can it improve performance?
Question 28 - What is the difference between self:: and static::?
Question 29 - What is the difference between comparing objects with == and ===?
Question 30 - What is object serialization, and what should you be careful about?
Question 31 - How would you test an OOP PHP class with PHPUnit?
```

---

## Question Source Map

```
Question 01 Source: https://www.php.net/manual/en/oop5.intro.php
Question 02 Source: https://www.php.net/manual/en/language.oop5.basic.php
Question 03 Source: https://www.php.net/manual/en/language.oop5.properties.php
Question 04 Source: https://www.php.net/manual/en/language.oop5.decon.php
Question 05 Source: https://www.php.net/manual/en/language.oop5.visibility.php
Question 06 Source: https://www.php.net/manual/en/language.oop5.visibility.php
Question 07 Source: https://www.php.net/manual/en/language.oop5.property-hooks.php
Question 08 Source: https://www.php.net/manual/en/language.oop5.visibility.php
Question 09 Source: https://www.php.net/manual/en/language.oop5.inheritance.php
Question 10 Source: https://www.php.net/manual/en/language.oop5.inheritance.php
Question 11 Source: https://www.php.net/manual/en/language.oop5.static.php
Question 12 Sources: https://www.php.net/manual/en/language.oop5.abstract.php, https://www.php.net/manual/en/language.oop5.interfaces.php
Question 13 Source: https://www.php.net/manual/en/language.oop5.interfaces.php
Question 14 Source: https://www.php.net/manual/en/language.oop5.interfaces.php
Question 15 Source: https://www.php.net/manual/en/language.types.declarations.php
Question 16 Source: https://www.php.net/manual/en/language.oop5.variance.php
Question 17 Source: https://www.php.net/manual/en/language.oop5.traits.php
Question 18 Source: https://www.php.net/manual/en/language.oop5.magic.php
Question 19 Source: https://www.php.net/manual/en/language.oop5.references.php
Question 20 Sources: https://www.php.net/manual/en/language.oop5.final.php, https://www.php.net/manual/en/language.oop5.cloning.php
Question 21 Source: https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties
Question 22 Sources: https://www.php.net/manual/en/language.namespaces.php, https://www.php.net/manual/en/function.spl-autoload-register.php
Question 23 Source: https://www.php.net/manual/en/language.enumerations.php
Question 24 Source: https://www.php.net/manual/en/language.exceptions.php
Question 25 Source: https://www.php.net/manual/en/language.attributes.php
Question 26 Source: https://www.php.net/manual/en/language.oop5.anonymous.php
Question 27 Source: https://www.php.net/manual/en/language.oop5.lazy-objects.php
Question 28 Source: https://www.php.net/manual/en/language.oop5.late-static-bindings.php
Question 29 Source: https://www.php.net/manual/en/language.oop5.object-comparison.php
Question 30 Source: https://www.php.net/manual/en/language.oop5.serialization.php
Question 31 Source: https://docs.phpunit.de/en/12.2/writing-tests-for-phpunit.html
```

---

## Interview Question Session Cycle

### PLAN

Before answering, state:
- The exact interview question.
- The real skill the interviewer is testing.
- Which lecture or lectures this question depends on.

### DO

Teach the answer in this order:
- Start with a plain-English answer that could be said in an interview.
- Explain each important term before using it deeply.
- If code is needed, show the smallest possible PHP 8.5+ example first.
- Annotate every line of every code snippet.
- Then improve the answer into a stronger interview-ready version.

### CHECK

Ask one targeted task:
- For theory questions: ask the student to answer in their own words.
- For code questions: ask the student to write or fix one small code example.

Wait for the student's answer before moving on.

### ACT

- Correct answer: confirm it, give a polished interview answer, and mark the question with ✅ in the progress list.
- Partially correct: identify the missing point, re-teach only that point, then re-ask the CHECK task.
- Stuck: return to the simplest analogy, give a smaller version of the question, then re-ask.

---

## Code Standards

All code shown or practiced in this track must follow these rules:

1. PHP version: target PHP 8.5 or newer.
2. Every code block must start with `<?php` and include `declare(strict_types=1);` when type hints are used.
3. Naming: PascalCase for class names, camelCase for methods and properties, UPPER_SNAKE_CASE for constants.
4. Keep code examples focused on the interview question.
5. Annotate every line of every code snippet. Zero uncommented lines.
6. Every code block has a label above it stating what file it belongs to.
7. Do not pre-write final `.php` solution files for the student. The student writes practice code during the question session.

---

## Source Reference Rules

Every interview question must include a source reference, similar to the lecture `PHP Manual Reference` rule.

- Each question folder's `README.md` must end with a `Source:` line.
- Use the official PHP Manual when the question is about PHP language behavior.
- Use official tool documentation when the question is about a tool, such as PHPUnit.
- If one question depends on more than one official page, write `Sources:` and include all relevant links.
- The source line must be the final line in the `README.md`.

---

## Interview Questions Folder Structure

```
02-Interview-Questions/
  Question-01-why-use-oop-in-php/
    README.md         // Must end with Source or Sources
    code-1.php        // Student-created code attempt if needed
    code-2.php        // Optional improved attempt after feedback
    notes.md          // Optional final answer in the student's own words
  Question-02-class-vs-object/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-03-properties-vs-methods/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-04-constructor-and-constructor-promotion/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-05-visibility-public-private-protected/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-06-encapsulation-and-validation/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-07-property-hooks-vs-getters-setters/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-08-asymmetric-visibility/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-09-inheritance-use-and-limits/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-10-method-overriding-and-parent/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-11-static-members-and-class-constants/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-12-abstract-class-vs-interface/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-13-multiple-interfaces-vs-single-inheritance/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-14-polymorphism-with-type-hints/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-15-strict-types-and-return-types/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-16-covariance-and-contravariance/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-17-traits-and-conflict-resolution/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-18-magic-methods-and-risks/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-19-object-handles-assignment-and-passing/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-20-final-keyword-and-cloning/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-21-readonly-objects-and-immutability/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-22-namespaces-and-psr4-autoloading/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-23-enums-and-valid-states/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-24-exceptions-and-custom-exceptions/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-25-attributes-as-metadata/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-26-anonymous-classes-and-object-iteration/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-27-lazy-objects/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-28-late-static-bindings-self-vs-static/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-29-object-comparison/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-30-serialization-and-unserialization/
    README.md
    code-1.php
    code-2.php
    notes.md
  Question-31-testing-oop-code-with-phpunit/
    README.md
    code-1.php
    code-2.php
    notes.md
```

Only `README.md` is created as a scaffold. The `.php` files and `notes.md` files are created only when the student works through that question.

---

## Question Folder Rules

Each question folder contains a `README.md` with:
- The exact interview question.
- The related lecture or lectures.
- What the interviewer is testing.
- What a strong answer should cover.
- A practice task.
- The completion rule.
- The source reference as the final line.

When a question is completed:
1. Update its folder `README.md` status from `Not completed` to `Completed`.
2. Mark the matching question with ✅ in the progress list in this file.
3. If code was practiced, keep the student's code inside that question folder.

---

## What Not To Do

- Do not answer more than one interview question per session unless the student explicitly asks to continue.
- Do not turn the track into generic career advice.
- Do not teach design patterns, SOLID, or broad OOD theory in this file.
- Do not pre-write final answers before the student tries the CHECK task.
- Do not create `.php` solution files unless the student is actively working through that question.
- Do not move lecture curriculum content into this file.
