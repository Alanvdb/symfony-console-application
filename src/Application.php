<?php

namespace AlanVdb\Console;

use Symfony\Component\Console\Application as BaseApplication;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

class Application extends BaseApplication
{
    private $container;
    
    public function __construct()
    {
        parent::__construct('Console Application', '1.0.0');
        $this->initializeContainer();
        $this->registerCommands();
    }
    
    private function initializeContainer()
    {
        $this->container = new ContainerBuilder();
        $loader = new YamlFileLoader($this->container, new FileLocator(__DIR__.'/../../config'));
        $loader->load('services.yaml');
        $this->container->compile();
    }
    
    private function registerCommands()
    {
        foreach ($this->container->findTaggedServiceIds('console.command') as $id => $tags) {
            $this->add($this->container->get($id));
        }
    }
}
