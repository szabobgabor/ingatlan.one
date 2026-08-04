<?php

declare(strict_types=1);

namespace App\Application\Common;

readonly class MapViewModel {
    public function __construct(
        public string $url,
        public string $imgSrc,
        public string $imgAlt,
    )
    {}

    public static function createFromArray(array $data): self
    {
        return new self(
            $data['url'],
            $data['imgSrc'],
            $data['imgAlt'],
        );
    }
}