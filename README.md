# clamp

Adds the support of the mathematical method clamp() for PHP.

[![Badge](http://img.shields.io/badge/source-renfordt/clamp-blue.svg)](https://github.com/renfordt/clamp)
[![Packagist Version](https://img.shields.io/packagist/v/renfordt/clamp?include_prereleases)](https://packagist.org/packages/renfordt/clamp/)
![Packagist PHP Version](https://img.shields.io/packagist/dependency-v/renfordt/clamp/php)
![GitHub License](https://img.shields.io/github/license/renfordt/clamp)
![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/renfordt/clamp/php.yml?logo=github)
[![Code Climate coverage](https://img.shields.io/codeclimate/coverage/renfordt/clamp?logo=codeclimate)](https://codeclimate.com/github/renfordt/clamp/test_coverage)
[![Code Climate maintainability](https://img.shields.io/codeclimate/maintainability/renfordt/clamp?logo=codeclimate)](https://codeclimate.com/github/renfordt/clamp/maintainability)

## Installation

The recommended way of installing Larvatar is to use [Composer](https://getcomposer.org/). Run the following command to
install it to you project:

```
composer require renfordt/clamp
```

## Usage

The usage is very simple and comparable to the C++ function:

```php
clamp(
    $value, // The value to be clamped
    $min, // The minimum value to clamp to
    $max // The maximum value to clamp to
);
```

Alternatively you can use `clampMinMax()` which is a bit slower.

```php
clampMinMax(
    $value, // The value to be clamped
    $min, // The minimum value to clamp to
    $max // The maximum value to clamp to
);
```

## Why another package?

Even though there are some similar packages, this one focuses on different approaches.

First of all the syntax is similar to c++ clamp function.

Secondly and more important this package focuses on performance. Other packages uses the `max($min, min($max, $num))`
approach but this packages works with the following code:

```php
if ($value > $max) {
    return $max;
} elseif ($value < $min) {
    return $min;
}
return $value;
```

Even though the readability is a bit worse, the performance is up to 2x faster. In most cases this is not noticeable but
in some cases there will be a benefit.

Over a iteration of 100.000 executions the functions need the following times:

### String

* clamp: 0.0035040378570557 sec
* clampMinMax: 0.0061681270599365 sec

### Integer

* clamp: 0.0029380321502686 sec
* clampMinMax: 0.0056021213531494 sec

### Float

* clamp: 0.0028560161590576 sec
* clampMinMax: 0.0062460899353027 sec

