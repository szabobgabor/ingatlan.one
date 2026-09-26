<?php

declare(strict_types=1);

namespace App\Framework\Kernel;

use App\Framework\Path;
use Psr\Container\ContainerInterface;

class Console {
    public function __construct(
        private ContainerInterface $container,
        private Path $path,
    )
    {}

    public function run(array $argv): void
    {
        echo "Hello World!\n";
        $property = include ($this->path->getPath('data/properties/M334090.php'));
        print_r($property);
    }
}