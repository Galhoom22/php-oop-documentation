Summary
- Procedural code keeps related data in separate, loose variables and keeps the functions that use that data somewhere else entirely.
- As a program grows, this causes duplication (repeating the same pattern per user) and tight coupling (one small change forces edits in many places).
- OOP fixes this by bundling the data and the behavior that belongs to it into one organized unit.

Key rule to remember: When data and the functions that act on it are kept apart, every change becomes risky and repetitive.

Common mistake to avoid: Believing more functions alone will organize a growing program. The real problem is that the data is not grouped with its behavior.

PHP Manual Reference: https://www.php.net/manual/en/oop5.intro.php