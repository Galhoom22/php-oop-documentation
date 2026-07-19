Summary
- Encapsulation means hiding an object's internal data (private) and exposing only safe, controlled methods to read or change it.
- A setter validates incoming data before storing it, so the object can refuse bad values and never enter a broken state.
- This is about control, not secrecy: the object decides exactly how its data is allowed to change.

Key rule to remember: Never let outside code change important data directly; route every change through a method that can validate it first.

Common mistake to avoid: Writing a setter that just assigns the value with no checks. A setter with no validation gives you all the boilerplate and none of the protection.

PHP Manual Reference: https://www.php.net/manual/en/language.oop5.visibility.php