<?php

declare(strict_types=1);

namespace App\Framework;

readonly class Path
{
    public function __construct(
        private string $root,
    )
    {}

    public function getPath(string $path): string
    {
        return $this->root.'/'.$path;
    }

    public function getPublicPath(string $path): string
    {
        return $this->root.'/public/'.$path;
    }
}