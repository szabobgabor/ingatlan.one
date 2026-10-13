<?php

declare(strict_types=1);

namespace App\Framework\Kernel;

use Psr\Container\ContainerInterface;

class Console {
    /**
     * @param array<string, class-string> $commands command name => invokable class
     */
    public function __construct(
        private readonly ContainerInterface $container,
        private readonly array $commands,
    )
    {}

    public function run(array $argv): int
    {
        $name = $argv[1] ?? null;
        if ($name === null) {
            $this->listCommands();
            return 0;
        }
        if (!isset($this->commands[$name])) {
            fwrite(STDERR, sprintf("Unknown command \"%s\"\n\n", $name));
            $this->listCommands();
            return 1;
        }

        $command = $this->container->get($this->commands[$name]);
        return $command(array_slice($argv, 2));
    }

    private function listCommands(): void
    {
        echo "Available commands:\n";
        foreach (array_keys($this->commands) as $name) {
            echo '  '.$name."\n";
        }
    }
}