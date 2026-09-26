<?php

declare(strict_types=1);

namespace App\Domain\Location;

class MapData
{
    public function __construct(
        public readonly string $url,
        public readonly string $imgSrc,
        public readonly string $imgAlt,
    )
    {}
}