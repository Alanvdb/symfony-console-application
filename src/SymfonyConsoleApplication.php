<?php declare(strict_types=1);

namespace AlanVdb\Console;

use AlanVdb\Console\Definition\ConsoleApplicationInterface;
use AlanVdb\Console\Definition\CommandInterface;
use Symfony\Component\Console\Application;
use AlanVdb\Console\Exception\InvalidArgumentException;

class SymfonyConsoleApplication
    extends Application
    implements ConsoleApplicationInterface
{
    public function __construct(string $name, string $version, string ...$commands)
    {
        parent::__construct($name, $version);

        foreach($commands as $command) {
            if (!class_exists($command)) {
                throw new InvalidArgumentException(
                    "Provided class does not exists : \"{$command}\"."
                );
            }
            if (!is_subclass_of($command, CommandInterface::class)) {
                throw new InvalidArgumentException(sprintf(
                    "Provided class does not implements %s : \"%s\".",
                    CommandInterface::class,
                    $command
                ));
            }
            $command = new $command();
            $this->add($command);
        }
    }
}
