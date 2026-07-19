# Lecture 03 — Properties

> Your quick recap after finishing this lecture.

---

## What you learned

1. Properties are variables declared inside a class; they are the labeled boxes that hold each object's data.
2. You reach a property on an object with the arrow operator, like `$car->color`, to set or read it.
3. Each object created from a class keeps its own separate copy of the properties, so changing one object does not affect another.

---

## Key rule

> The class defines which properties exist; each object holds its own values for them, accessed with `->`.

---

## Watch out

Avoid this common mistake — expecting two objects to share property values. They do not. Each object owns its own copy.

---

## Official reference

[PHP Manual — Properties](https://www.php.net/manual/en/language.oop5.properties.php)
