<?php

declare(strict_types=1);

namespace App\Framework\Kernel;

use Psr\Container\ContainerInterface;

class Console {
    public function __construct(
        private ContainerInterface $container
    )
    {}

    public function run(array $argv): void
    {
        echo "Hello World!\n";
    }
}