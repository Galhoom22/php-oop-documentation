Summary
- Property hooks (PHP 8.4) attach get and set logic directly to a property instead of separate getter/setter methods.
- The set hook runs automatically on write and can validate; the get hook runs on read and can format the value.
- Outside code uses normal property syntax ($obj->price = 100), while the class still controls what gets stored and returned.

Key rule to remember: Property hooks give you encapsulation without boilerplate — write to the property normally, and PHP runs your rules automatically.

Common mistake to avoid: Forgetting that $value (not $this->price) is the incoming value inside a set hook block.