# Lecture 07 — Encapsulation

> Your quick recap after finishing this lecture.

---

## What you learned

1. Encapsulation means hiding an object's internal data (`private`) and exposing only safe, controlled methods to read or change it.
2. A setter validates incoming data before storing it, so the object can refuse bad values and never enter a broken state.
3. This is about control, not secrecy: the object decides exactly how its data is allowed to change.

---

## Key rule

> Never let outside code change important data directly; route every change through a method that can validate it first.

---

## Watch out

Avoid this common mistake — writing a setter that just assigns the value with no checks. A setter with no validation gives you all the boilerplate and none of the protection.

---

## Official reference

[PHP Manual — Visibility](https://www.php.net/manual/en/language.oop5.visibility.php)
