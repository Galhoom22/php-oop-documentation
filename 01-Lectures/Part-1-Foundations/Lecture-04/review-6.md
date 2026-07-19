Summary
- A method is a function defined inside a class that gives the object behavior and can read or change the object's own properties.
- Inside a method, $this means "the specific object this method was called on", so the same method gives different results for different objects.
- You call a method with $object->methodName(), which runs that behavior on that particular object.

Key rule to remember: Inside a class, an object refers to its own data through $this; outside, you use the object's variable name.

Common mistake to avoid: Writing color instead of $this->color inside a method. Without $this, PHP does not know you mean the object's property.

PHP Manual Reference: https://www.php.net/manual/en/language.oop5.basic.php