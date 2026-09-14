<?php

declare(strict_types=1);

namespace App\Application\Article;

use App\Application\Contract\MarkdownRenderer;
use App\Framework\Path;
use Psr\Container\ContainerInterface;

class GetArticle {
    public function __construct(
        private readonly MarkdownRenderer $markdownRenderer,
        private readonly Path $path,
        private readonly ContainerInterface $container
    )
    {}

    public function __invoke(string $slug): ArticleViewModel
    {
        $articleSource = $this->path->getPath('data/articles/'.$slug.'.md');
        if (!file_exists($articleSource)) {
            throw new \RuntimeException('Article not found');
        }
        $markdown = file_get_contents($articleSource);
        $contents = $this->markdownRenderer->render($markdown);

        if (preg_match('/<!-- component:([^ ]+) -->/', $contents, $matches)) {
            $componentName = $matches[1];
            $class = 'App\Presentation\\'.$componentName;
            if (class_exists($class)) {
                $component = $this->container->get($class);
                $contents = str_replace($matches[0], $component(), $contents);
            }
        }

        return new ArticleViewModel('title', $contents);
    }
}