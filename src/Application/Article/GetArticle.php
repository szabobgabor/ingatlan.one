<?php

declare(strict_types=1);

namespace App\Application\Article;

use App\Application\Contract\MarkdownRenderer;
use App\Framework\Path;

class GetArticle {

    public function __construct(
        private readonly MarkdownRenderer $markdownRenderer,
        private readonly Path $path,
    )
    {}

    public function __invoke(string $slug): ArticleViewModel
    {
        $articleSource = $this->path->getPath('data/articles/'.$slug.'.md');
        if (!file_exists($articleSource)) {
            throw new \RuntimeException('Article not found');
        }
        $markdown = file_get_contents($articleSource);
        return new ArticleViewModel('title', $this->markdownRenderer->render($markdown));
    }
}