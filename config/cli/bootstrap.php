<?php

use App\Framework\Kernel\Console;
use App\Framework\Path;
use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;

require_once __DIR__ . '/../../vendor/autoload.php';

$definitions = require __DIR__ . '/../container.php';

$definitions[Console::class] = function(ContainerInterface $container) {
    return new Console($container, $container->get(Path::class));
};

$container = (new ContainerBuilder())
    ->addDefinitions($definitions)
    ->build();

return $container->get(Console::class);