# Scrabble Score with PHPUnit, Silex and Twig

#### Epicodus PHP Week 2 Lab, 2/16/2017

#### By Jason Brown , Benjamin T. Seaver

## Description

This project demonstrates building an app using PHPUnit, Silex and Twig frameworks.

## Setup/Installation Requirements
* See https://secure.php.net/ for details on installing _PHP_.  Note: PHP is typically already installed on Mac.
* See https://getcomposer.org for details on installing _composer_.
* Clone project
* From project root, run > `composer install --prefer-source --no-interaction`
* To run PHPUnit tests from root > `vendor/bin/phpunit tests`
* From web folder in project, Start PHP > `php -S localhost:8000`
* In web browser open `localhost:8000`

## Known Bugs
* No known bugs

## Support and contact details
* No support

## Technologies Used
* PHP
* Composer
* PHPUnit
* Silex
* Twig
* HTML
* CSS
* Bootstrap
* Git

## Copyright (c)
* 2017 Jason Brown, Benjamin T. Seaver

## License
* MIT

## Specifications
* Phase 1 - Dependencies, composer files and .gitignore.
* Phase 2 - Empty Scrabble class.
* Phase 3 - Build Test cases and implement Scrabble method.

* Behavior given a string, returns score.

| String              | Result             |
|--------------|----------------------------|
| quick          |     20           |  
| brown          |     10 |  
| fox          |     13 |
| jumps         |     16 |
| over          |     7 |
| the          |     6 |
| lazy          |     16 |                                 
| dog          |     5 |
| "!@#123"     |     0   |
| "lazy Darn doG!" | 26  |

* Note: the test plan does not include spaces, numbers other characters.

* Phase 4 - Initial Silex framework with "Hello" on home page
* Phase 5 - Twig template with a form that accepts a string and returns the result.

* End specifications
