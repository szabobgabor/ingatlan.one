<?php

use App\Framework\Kernel\Http;
use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;

require_once __DIR__ . '/../../vendor/autoload.php';

$definitions = require __DIR__ . '/../container.php';
$definitions[Http::class] = function(ContainerInterface $container) {
    return new Http($container);
};

$container = (new ContainerBuilder())
    ->addDefinitions($definitions)
    ->build();

return $container->get(Http::class);