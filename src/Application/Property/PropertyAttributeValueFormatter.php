<?php

declare(strict_types=1);

namespace App\Application\Property;

use App\Domain\LabeledEnum;
use App\Domain\Property\PropertyAttribute;
use App\Domain\Property\PropertyData;
use App\Presentation\Formatter\PriceFormatter;

class PropertyAttributeValueFormatter {

    public function __construct(
        private readonly PriceFormatter $priceFormatter,
    )
    {}

    public function format(PropertyData $property, PropertyAttribute $attribute): string {
        $value = $property->getAttributeValue($attribute);

        return match ($attribute) {
            PropertyAttribute::COMMON_COST,
            PropertyAttribute::HEATING_COST => $this->priceFormatter->format($value),
            default => $this->defaultFormat($value),
        };
    }

    private function defaultFormat(mixed $value): string
    {
        if ($value instanceof LabeledEnum) {
            return $value->label();
        }

        if (is_bool($value)) {
            return $value ? 'Igen' : 'Nem';
        }

        if (is_array($value)) {
            return implode(
                ', ',
                array_map(
                    $this->defaultFormat(...),
                    $value,
                ),
            );
        }

        return (string) $value;
    }
}