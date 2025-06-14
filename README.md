# alanvdb/symfony-console-application
_Desription_

[![Latest Version](https://img.shields.io/packagist/v/alanvdb/symfony-console-application.svg?style=flat-square)](https://packagist.org/packages/alanvdb/symfony-console-application)
[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](LICENSE)
[![CI Status](https://img.shields.io/github/actions/workflow/status/alanvdb/symfony-console-application/tests.yml?label=Tests&style=flat-square)](https://github.com/alanvdb/symfony-console-application/actions)
[![PHP Version](https://img.shields.io/packagist/php-v/alanvdb/symfony-console-application.svg?style=flat-square)](https://packagist.org/packages/alanvdb/symfony-console-application)

## Overview



## Features



## Requirements

- PHP ^8.4
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

$instance = new SymfonyConsoleApplication();
```

Factory pattern :

```php
require 'vendor/autoload.php';

use AlanVdb\Console\Factory\SymfonyConsoleApplicationFactory;

$factory = new SymfonyConsoleApplicationFactory();
$instance = $factory->createSymfonyConsoleApplication();
```

## License

This project is licensed under the MIT License. See the [MIT license](LICENSE) file for details.