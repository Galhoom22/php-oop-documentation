# Lecture 11 — Method Overriding & parent

> A child can override a parent method by defining the same method name. Use `parent::methodName()` with the `::` operator when you still need the parent's original behavior.

---

## What you learned

1. Overriding means the child defines a method with the same name as the parent, and that child version runs for child objects.
2. The parent's method is not called automatically after an override — use `parent::methodName()` when you want it.
3. `::` is the scope resolution operator; `parent::` means “use the parent class’s version.”

---

## Key rule

> Override to change behavior; call `parent::method()` when you still need the original steps.

---

## Watch out

Avoid this common mistake — overriding a method and assuming the parent version still runs by itself.

---

## Official reference

[PHP Manual — Scope Resolution Operator (::)](https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php)