#!/bin/bash

# Run PHPUnit tests
echo "Running PHPUnit tests..."
vendor/bin/phpunit

# Run PHPStan for static analysis
echo "Running PHPStan..."
vendor/bin/phpstan analyse

# Run PHPCS for coding standards
echo "Running PHPCS..."
vendor/bin/phpcs

echo "All tests executed."