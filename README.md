# PHP Undefined Array Key Notice

This repository demonstrates a common error in PHP: the 'Undefined index' notice. This notice occurs when you try to access an array element using a key that does not exist.

## The Problem

The `bug.php` file contains code that attempts to access the `city` key in the `$userData` array.  However, this key is not always present.  This results in a PHP notice, which may not always halt execution but can cause unexpected behavior.

## The Solution

The `bugSolution.php` file shows how to resolve this issue. It uses the `isset()` function to check if the key exists before attempting to access it. This prevents the notice from being issued.

## How to Run

1. Clone this repository.
2. Run the `bug.php` file using a PHP interpreter (e.g., `php bug.php`). Observe the notice.
3. Run the `bugSolution.php` file. Observe that there is no notice.