<?php declare(strict_types=1);

namespace AlanVdb\Console\Factory;

use AlanVdb\Console\Definition\ConsoleApplicationInterface;
use AlanVdb\Console\Definition\ConsoleApplicationFactoryInterface;
use AlanVdb\Console\SymfonyConsoleApplication;

class SymfonyConsoleApplicationFactory implements ConsoleApplicationFactoryInterface
{
    public function createConsoleApplication(string $name, string $version, string ...$commands): ConsoleApplicationInterface
    {
        return new SymfonyConsoleApplication($name, $version, ...$commands);
    }
}
