<?php

return [
    \App\Framework\Path::class => function(\Psr\Container\ContainerInterface $container) {
        return new \App\Framework\Path(dirname(__DIR__));
    },
    \App\Application\Contract\MarkdownRenderer::class => function(\Psr\Container\ContainerInterface $container) {
        return new \App\Infrastructure\Markdown\LeagueMarkdownRenderer();
    },
    \App\Application\Contract\FileDownloader::class => \DI\get(\App\Infrastructure\Http\StreamFileDownloader::class),
    \App\Application\PropertyImport\FetchImportFiles::class => \DI\autowire()
        ->constructorParameter('sources', (require __DIR__ . '/import.php')['sources']),
];