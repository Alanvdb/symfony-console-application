# alanvdb/symfony-console-application
Console application based on symfony/console library.

[![Latest Version](https://img.shields.io/packagist/v/alanvdb/symfony-console-application.svg?style=flat-square)](https://packagist.org/packages/alanvdb/symfony-console-application)
[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](LICENSE)
[![PHP Version](https://img.shields.io/packagist/php-v/alanvdb/symfony-console-application.svg?style=flat-square)](https://packagist.org/packages/alanvdb/symfony-console-application)

## Overview



## Features



## Requirements

- alanvdb/console-application-interface ^1.0

## Installation

```bash
composer require alanvdb/symfony-console-application
```

## Usage

Here is an example of how to use `symfony-console-application`:

```php
require 'vendor/autoload.php';

use AlanVdb\Console\SymfonyConsoleApplication;

$instance = new SymfonyConsoleApplication(
    'MyApp',
    '1.0',
    \My\Command::class // must implement AlanVdb\Console\Definition\CommandInterface
);
```

Factory pattern :

```php
require 'vendor/autoload.php';

use AlanVdb\Console\Factory\SymfonyConsoleApplicationFactory;

$factory = new SymfonyConsoleApplicationFactory();
$instance = $factory->createConsoleApplication(
    'MyApp',
    '1.0',
    \My\Command::class // must implement AlanVdb\Console\Definition\CommandInterface
);
```

## License

This project is licensed under the MIT License. See the [MIT license](LICENSE) file for details.