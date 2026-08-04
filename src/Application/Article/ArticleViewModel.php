<?php

declare(strict_types=1);

namespace App\Application\Article;

class ArticleViewModel {
    public function __construct(
        public readonly string $title,
        public readonly string $content,
    )
    {

    }
}