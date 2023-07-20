# PHPUnitExamples

This repository contains a collection of small and basic examples of PHPUnit tests.

## Prerequisites

Before you begin, ensure you have met the following requirements:

* You have installed PHP (version 7.3 or above recommended).
* You have installed Composer, the PHP package manager.
* You have installed PHPUnit (version 9 or above recommended).

## Installing PHPUnitExamples

To install PHPUnitExamples, follow these steps:

### Windows

1. Open your terminal.

2. Install PHPUnit globally using Composer:

   ```bash
   composer global require phpunit/phpunit ^9

Add Composer's global bin directory to the system PATH (if not done previously), you can find it by running:
composer global config bin-dir --absolute

macOS / Linux
Open your terminal.

Install PHPUnit globally using Composer:
composer global require phpunit/phpunit ^9


Open your .bashrc or .zshrc file (depending on which shell you use), you can do this via a text editor or by running nano ~/.bashrc or nano ~/.zshrc in your terminal.

Add this line to the file:
export PATH="$PATH:$HOME/.composer/vendor/bin"

If the above path does not work, try using this one instead:

   export PATH="$PATH:$HOME/.config/composer/vendor/bin"

Save and close the file.

Run source ~/.bashrc or source ~/.zshrc to load the new shell configuration.

Running the tests
To run the PHPUnit tests, navigate to the project directory and run the following command:

## phpunit
If you have installed PHPUnit locally in your project (i.e., it's listed as a dev dependency in your composer.json), you should use the following command instead:

## Copy code
./vendor/bin/phpunit /path/to/your/FunctionTest.php

1. Clone the repository:
```bash
git clone https://github.com/username/PHPUnitExamples.git
