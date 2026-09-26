<?php

declare(strict_types=1);

namespace App\Application\Common;

use App\Domain\Location\LocationData;
use App\Domain\Location\MapData;

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

    public static function createFromMapData(MapData $map): self
    {
        return new self(
            $map->url,
            $map->imgSrc,
            $map->imgAlt,
        );
    }
}