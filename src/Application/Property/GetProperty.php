<?php

declare(strict_types=1);

namespace App\Application\Property;

use App\Application\Image\ImageViewModel;
use App\Framework\Path;
use RuntimeException;

class GetProperty {
    public function __construct(
        private Path $path
    )
    {}
    public function __invoke(string $propertyId): PropertyViewModel
    {
        $propertyDataPath = $this->path->getPath('data/properties/'.$propertyId.'.php');
        if (!file_exists($propertyDataPath)) {
            throw new RuntimeException('Property not found');
        }
        $propertyData = include $propertyDataPath;
        return PropertyViewModel::createFromArray($propertyData, $this->path);
    }
}