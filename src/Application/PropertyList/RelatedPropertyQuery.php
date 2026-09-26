<?php

declare(strict_types=1);

namespace App\Application\PropertyList;

use App\Domain\Property\PropertyData;
use App\Framework\Path;

class RelatedPropertyQuery {
    public function __construct(
        private readonly Path $path,
    )
    {}

    /**
     * @param string[] $propertyIds
     * @return PropertyData[]
     */
    public function getList(array $propertyIds): array
    {
        $relatedProperties = [];
        foreach ($propertyIds as $propertyId) {
            $propertyDataPath = $this->path->getPath('data/properties/'.$propertyId.'.php');
            if (!file_exists($propertyDataPath)) {
                continue;
            }
            $relatedProperties[] = include $propertyDataPath;
        }

        return $relatedProperties;
    }
}