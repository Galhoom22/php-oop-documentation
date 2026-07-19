# Lecture 08 — Property Hooks

> Property hooks (PHP 8.4) attach get and set logic directly to a property, so outside code can use normal property syntax while the class still validates and formats values automatically.

---

## What you learned

1. Property hooks (PHP 8.4) attach `get` and `set` logic directly to a property instead of separate getter/setter methods.
2. The `set` hook runs automatically on write and can validate; the `get` hook runs on read and can format the value.
3. Outside code uses normal property syntax (`$obj->price = 100`), while the class still controls what gets stored and returned.

---

## Key rule

> Property hooks give you encapsulation without boilerplate — write to the property normally, and PHP runs your rules automatically.

---

## Watch out

Avoid this common mistake — forgetting that `$value` (not `$this->price`) is the incoming value inside a `set` hook block.

---

## Official reference

[PHP Manual — Property Hooks](https://www.php.net/manual/en/language.oop5.property-hooks.php)