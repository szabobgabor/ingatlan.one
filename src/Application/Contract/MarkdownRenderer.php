<?php

declare(strict_types=1);

namespace App\Application\Contract;

interface MarkdownRenderer
{
    public function render(string $markdown): string;
}