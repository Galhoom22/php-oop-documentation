Summary
- public, private, and protected control who can access a property or method: anywhere, only this class, or this class plus its children.
- Making data private and exposing it through public getter methods prevents outside code from corrupting your object's internal state.
- private is the safest default; only make something public when outside code genuinely needs it.

Key rule to remember: Hide data with private by default, and open a public door (a method) only where outside access is truly needed.

Common mistake to avoid: Making everything public out of habit. That removes all protection and lets any code change your object's data without control.

PHP Manual Reference: https://www.php.net/manual/en/language.oop5.visibility.php