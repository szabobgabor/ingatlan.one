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

    public function __invoke(): ArticleViewModel
    {
        $markdown = file_get_contents($this->path->getPath('data/articles/alberlet-vagy-sajat-lakas.md'));
        return new ArticleViewModel('title', $this->markdownRenderer->render($markdown));
    }
}