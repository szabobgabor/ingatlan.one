<?php

declare(strict_types=1);

namespace App\Domain\Property;

use App\Domain\Location\LocationData;

class PropertyData
{
    /**
     * @param PropertyAttributeData[] $attributes
     * @param PropertyImageData[] $images
     */
    public function __construct(
        public readonly string             $id,
        public readonly int                $price,
        public readonly LocationData       $location,
        public readonly string             $description,
        public readonly PropertyMarketType $marketType,

        public readonly ?int               $area = null,
        public readonly ?int               $landArea = null,
        public readonly ?float             $ceilingHeight = null,
        public readonly ?int               $rooms = null,
        public readonly ?int               $halfRooms = null,
        public readonly int|FloorType|null $floor = null,
        public readonly ?PropertyCondition $exteriorCondition = null,
        public readonly ?PropertyCondition $interiorCondition = null,
        public readonly ?PropertyStructure $structure = null,
        public readonly ?int $yearBuilt = null,
        public readonly array $attributes = [],
        public readonly array $images = [],
    )
    {}

    public function getAttributeValue(
        PropertyAttribute $attribute,
    ): mixed
    {
        if ($attribute->allowsMultipleValues()) {
            $result = [];
            foreach ($this->attributes as $item) {
                if ($item->attribute === $attribute) {
                    $result[] = $item->value;
                }
            }
            return $result;
        }

        foreach ($this->attributes as $item) {
            if ($item->attribute === $attribute) {
                return $item->value;
            }
        }
        return null;
    }
}