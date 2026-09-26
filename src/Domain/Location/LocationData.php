<?php

declare(strict_types=1);

namespace App\Domain\Location;

class LocationData
{
    public function __construct(
        public readonly ?string $id,
        public readonly string $locality,
        public readonly string $postalCode,
        public readonly ?string $subLocality,
        public readonly ?string $street = null,
        public readonly ?string $streetNumber = null,
        public readonly ?MapData $map = null,
    )
    {}
}