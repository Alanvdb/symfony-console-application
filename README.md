
# symfony-console-application

Project template for Symfony console application. A ready-to-use foundation for building powerful CLI applications with Symfony Console components.

## Installation

```bash
composer create-project alanvdb/symfony-console-application project-name
```

## Features

- 🚀 Ready-to-use Symfony Console application structure
- ⚡ Dependency Injection container pre-configured
- 📦 Includes common Symfony components:
  - Console
  - DependencyInjection
  - Config
  - Yaml
- 📂 Organized project structure
- 🔄 Automatic command discovery
- 🛠 Example command included

## Getting Started

1. Run your application:
```bash
cd project-name
./bin/console
```

2. See available commands:
```bash
./bin/console list
```

3. Run the example command:
```bash
./bin/console app:example
```

## Creating New Commands

1. Create a new PHP class in `src/` (e.g., `NewCommand.php`)
2. Extend `Symfony\Component\Console\Command\Command`
3. Use the `#[AsCommand]` attribute or implement `configure()` method

Example command:
```php
<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:new',
    description: 'My new command'
)]
class NewCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Command executed!');
        return Command::SUCCESS;
    }
}
```

The command will be automatically registered in your application.

## Configuration

### Services
Edit `config/services.yaml` to:
- Add new service definitions
- Modify autowiring settings
- Register additional namespaces

### Environment Variables
1. Copy `.env.template` to `.env`
2. Add your environment-specific variables

## Testing

The template includes PHPUnit configuration. To run tests:

```bash
composer test
```

## Included Symfony Components

- `symfony/console`: CLI application foundation
- `symfony/dependency-injection`: Service container
- `symfony/config`: Configuration management
- `symfony/yaml`: YAML configuration support

## Adding More Components

To add additional Symfony components:

```bash
composer require symfony/component-name
```

Recommended additions:
```bash
composer require symfony/filesystem
composer require symfony/process
composer require symfony/finder
```

## Best Practices

1. Keep commands thin - move business logic to services
2. Use the dependency injection container for service management
3. Follow Symfony's command naming conventions (`namespace:action`)
4. Document your commands with proper descriptions and help texts

## License

MIT License. See included [LICENSE](LICENSE) file.

## Contributing

Contributions are welcome! Please open an issue or pull request on GitHub.