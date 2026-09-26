<?php

declare(strict_types=1);

namespace App\Application\Property;

use App\Domain\Property\PropertyData;
use App\Framework\Path;
use RuntimeException;

class PropertyQuery {
    public function __construct(
        private readonly Path $path,
    )
    {}

    public function get(string $propertyId): PropertyData
    {
        $propertyDataPath = $this->path->getPath('data/properties/'.$propertyId.'.php');
        if (!file_exists($propertyDataPath)) {
            throw new RuntimeException('Property not found');
        }
        return include $propertyDataPath;
    }
}