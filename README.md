# PHP Type Hinting and Strict Typing

This repository demonstrates a common error in PHP related to type hinting.  Type hinting in PHP, while helpful for code readability and maintainability, does not strictly enforce type checking by default. This can lead to unexpected behavior and hard-to-debug issues.

The `bug.php` file showcases a function with type hints that does not throw an error when an incorrect type is passed. The `bugSolution.php` file demonstrates the correct use of strict typing to prevent this issue.

## How to reproduce

1. Clone this repository.
2. Run `bug.php` and observe the result. Note the lack of a TypeError, even with a type mismatch.
3. Run `bugSolution.php` and observe the correct TypeError when an incorrect type is passed in.

## Key takeaways

* PHP type hinting does not enforce type checking by default.
* Using strict typing with the `declare(strict_types=1);` directive enforces type checks.
* Strict typing improves code reliability and reduces unexpected errors.  