<?php

/**
 * command name => invokable class, resolved from the container
 * and called with the remaining cli arguments: __invoke(array $args): int
 */
return [
    'import:fetch' => \App\Cli\FetchImportFilesCommand::class,
];