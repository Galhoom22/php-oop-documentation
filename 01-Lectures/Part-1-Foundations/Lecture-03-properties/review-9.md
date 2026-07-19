Summary
- Properties are variables declared inside a class; they are the labeled boxes that hold each object's data.
- You reach a property on an object with the arrow operator, like $car->color, to set or read it.
- Each object created from a class keeps its own separate copy of the properties, so changing one object does not affect another.

Key rule to remember: The class defines which properties exist; each object holds its own values for them, accessed with ->.

Common mistake to avoid: Expecting two objects to share property values. They do not. Each object owns its own copy.

PHP Manual Reference: https://www.php.net/manual/en/language.oop5.properties.php