# Lecture 06 — Visibility

> Your quick recap after finishing this lecture.

---

## What you learned

1. `public`, `private`, and `protected` control who can access a property or method: anywhere, only this class, or this class plus its children.
2. Making data private and exposing it through public getter methods prevents outside code from corrupting your object's internal state.
3. `private` is the safest default; only make something public when outside code genuinely needs it.

---

## Key rule

> Hide data with `private` by default, and open a public door (a method) only where outside access is truly needed.

---

## Watch out

Avoid this common mistake — making everything public out of habit. That removes all protection and lets any code change your object's data without control.

---

## Official reference

[PHP Manual — Visibility](https://www.php.net/manual/en/language.oop5.visibility.php)
