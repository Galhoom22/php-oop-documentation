# Lecture 09 — Asymmetric Visibility

> Asymmetric visibility (PHP 8.4) lets a property be readable from outside while remaining writable only inside the class — perfect when callers need to see a value but must not change it.

---

## What you learned

1. `public private(set)` means anyone can read the property, but only the class itself can assign to it.
2. This replaces the common pattern of a private property plus a getter with no setter.
3. Asymmetric visibility requires a typed property; outside writes cause a fatal error.

---

## Key rule

> Use `public private(set)` when outside code must see a value but must never rewrite it.

---

## Watch out

Avoid this common mistake — forgetting the property must be typed (`string`, `int`, …); asymmetric visibility does not work on untyped properties.

---

## Official reference

[PHP Manual — Visibility (Asymmetric Property Visibility)](https://www.php.net/manual/en/language.oop5.visibility.php)