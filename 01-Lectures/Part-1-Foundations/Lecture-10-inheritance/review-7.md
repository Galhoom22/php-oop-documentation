# Lecture 10 — Inheritance

> Inheritance lets a child class reuse a parent's public and protected members with `extends`. PHP allows only one parent, and private members of the parent stay hidden from the child.

---

## What you learned

1. `extends` creates a parent→child link so the child reuses the parent's public and protected members.
2. A child does not get usable access to the parent's `private` members.
3. If a child defines its own constructor, it must call `parent::__construct(...)` itself — PHP will not call it automatically.

---

## Key rule

> Use `extends` to reuse a parent's public/protected members; never expect private parent data or an automatic parent constructor call.

---

## Watch out

Avoid this common mistake — defining a child constructor and forgetting `parent::__construct(...)`, so parent setup never runs.

---

## Official reference

[PHP Manual — Object Inheritance](https://www.php.net/manual/en/language.oop5.inheritance.php)