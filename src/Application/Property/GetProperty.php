<?php

declare(strict_types=1);

namespace App\Application\Property;

class GetProperty {
    public function __construct(
        private readonly PropertyQuery $propertyQuery,
        private readonly PropertyFactory $propertyFactory,
    )
    {}
    public function __invoke(string $propertyId): PropertyViewModel
    {
        $property = $this->propertyQuery->get($propertyId);
        return $this->propertyFactory->createFromProperty($property);
    }
}