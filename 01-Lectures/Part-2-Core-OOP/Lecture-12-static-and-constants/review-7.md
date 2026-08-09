# Lecture 12 — Static & Class Constants

> Static members belong to the class itself (shared by all objects). Class constants are fixed named values that never change. Access them with `ClassName::` outside and `self::` inside.

---

## What you learned

1. A `static` property/method belongs to the class, not to one object — one shared scoreboard.
2. A class `const` is a fixed value that cannot change after it is defined.
3. Outside use `ClassName::`; inside the class use `self::` (and remember `$` only for static properties).

---

## Key rule

> Use `static` for shared class-level data/behavior; use `const` for values that must never change.

---

## Watch out

Avoid this common mistake — writing `ClassName::score` without `$` for a static property, or putting `$` on a constant (`ClassName::$NAME`).

---

## Official reference

[PHP Manual — Static Keyword](https://www.php.net/manual/en/language.oop5.static.php)