<?php declare(strict_types=1);

namespace AlanVdb\Console;

use AlanVdb\Console\Definition\ConsoleApplicationInterface;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\SignalableCommandInterface;
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
            if (!is_subclass_of($command, SignalableCommandInterface::class)) {
                throw new InvalidArgumentException(sprintf(
                    "Provided class does not implements %s : \"%s\".",
                    SignalableCommandInterface::class,
                    $command
                ));
            }
            $command = new $command();
            $this->add($command);
        }
    }
}