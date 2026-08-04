<?php

declare(strict_types=1);

namespace App\Application\Common;

readonly class IconValueViewModel
{
    public function __construct(
        public string $icon,
        public string $value,
    )
    {}
}