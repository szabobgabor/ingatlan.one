<?php

declare(strict_types=1);

namespace App\Infrastructure\Markdown;

use App\Application\Contract\MarkdownRenderer;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\Table\TableExtension;
use League\CommonMark\MarkdownConverter;

class LeagueMarkdownRenderer implements MarkdownRenderer
{
    private MarkdownConverter $converter;

    public function __construct(
    )
    {
        $config = [
            'table' => [
                'alignment_attributes' => [
                    'left' => ['class' => 'text-start'],
                    'center' => ['class' => 'text-center'],
                    'right' => ['class' => 'text-end'],
                ],
            ],
        ];

        $environment = new Environment($config);
        $environment->addExtension(new CommonMarkCoreExtension());
        $environment->addExtension(new TableExtension());
        $this->converter = new MarkdownConverter($environment);

    }
    
    public function render(string $markdown): string
    {
        return $this->converter
            ->convert($markdown)
            ->getContent();
    }
}