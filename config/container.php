<?php

return [
    \App\Framework\Path::class => function(\Psr\Container\ContainerInterface $container) {
        return new \App\Framework\Path(dirname(__DIR__));
    },
    \App\Application\Contract\MarkdownRenderer::class => function(\Psr\Container\ContainerInterface $container) {
        return new \App\Infrastructure\Markdown\LeagueMarkdownRenderer();
    },
];