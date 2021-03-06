ValueOrDefault
==============
[![Latest Stable Version](https://poser.pugx.org/mpscholten/value-or-default/version)](https://packagist.org/packages/mpscholten/value-or-default) [![License](https://poser.pugx.org/mpscholten/value-or-default/license)](https://packagist.org/packages/mpscholten/value-or-default) [![Circle CI](https://circleci.com/gh/mpscholten/value-or-default.svg?style=shield)](https://circleci.com/gh/mpscholten/value-or-default)

Simple default values for your php code.

### Get started ###

Install via composer

    composer install mpscholten/value-or-default

### Basic Usage ###

```php
// Env variables
$tempDir = \MPScholten\valueOrDefault($_ENV['TEMP_DIR'], '/tmp');
// $tempDir is now either $_ENV['TEMP_DIR'] or '/tmp' dependending on whether $_ENV['TEMP_DIR'] is set

// JSON input
$user = json_decode(...);
$userName = \MPScholten\valueOrDefault($user['name'], 'n/a');
// $userName is now either $user['name'] or 'n/a' depending on whether $user['name'] is set and non-null

// Null values
$value = null;
\MPScholten\valueOrDefault($value, 0); // returns 0 because $value == null
```

### Tests ###

You can run the `phpunit` suite with `make`

    make tests

### Contributing ###

Feel free to send pull requests!
