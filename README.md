# PHP Advanced - Level 1

This repository contains the solutions for the Level 1 exercises of the PHP Advanced module.

## Sprint 1 - Tasca 6

### Exercise 1 - Sessions and Superglobals

In this exercise, I practiced working with PHP sessions and superglobal variables.

The implementation consists of two files:

- A form file that collects user information.
- A processing file that receives the submitted data, stores it in a session, and displays the values on the screen.

Concepts practiced:

- Sessions (`$_SESSION`)
- Superglobals (`$_POST`)

---

### Exercise 2 - Magic Constants

A simple exercise to demonstrate the use of PHP magic constants.

Concepts practiced:

- `__FILE__`
- `__DIR__`
- `__LINE__`
- `__CLASS__` 
- `__METHOD__` 

---

### Exercise 3 - Magic Method `__toString()`

In this exercise, I created a `User` class and overrode the `__toString()` magic method.

The goal was to understand how objects can define their own string representation when they are printed or echoed.

Concepts practiced:

- Classes and objects
- Magic methods
- Method overriding
- `__toString()`

---

## Technologies

- PHP 8+
- HTML

## Installation and Execution

1. Clone the repository: 
```
git clone <repository-url>
```
2. Navigate to the project folder:
```
cd project-folder
```
3. Start the PHP built-in server:

```
php -S localhost:8000 01-exercise/form.php

php -S localhost:8000 02-exercise/index.php

php -S localhost:8000 03-exercise/index.php
```
4. Open the project in your browser:
```
http://localhost:8000
```

## Learning Objectives

- Understand how sessions work in PHP.
- Use PHP superglobals correctly.
- Become familiar with magic constants.
- Learn how magic methods work.
- Practice object-oriented programming concepts.