<?php

declare(strict_types=1);

namespace App\Domain\Property;

enum PropertyAttributeType {
    case INT;
    case FLOAT;
    case STRING;
    case BOOL;
    case ICON_VALUE;
    case VIEW;
    case HEATING;
    case COMFORT_LEVEL;
    case HEAT_DISTRIBUTION;
    case ORIENTATION;
    case NATURAL_LIGHT;
    case STAIRWELL_TYPE;
    case PARKING;
    case FURNISHING;

    public function isValueValid(mixed $value): bool
    {
        return match ($this){
            self::STRING => is_string($value),
            self::BOOL => is_bool($value),
            self::INT => is_int($value),
            self::FLOAT => is_float($value),
            self::ICON_VALUE => is_array($value) && count($value) === 2 && is_string($value[0]) && is_string($value[1]),
            self::VIEW => $value instanceof PropertyView,
            self::HEATING => $value instanceof PropertyHeating,
            self::COMFORT_LEVEL => $value instanceof PropertyComfortLevel,
            self::HEAT_DISTRIBUTION => $value instanceof PropertyHeatDistribution,
            self::ORIENTATION => $value instanceof Orientation,
            self::NATURAL_LIGHT => $value instanceof PropertyNaturalLight,
            self::STAIRWELL_TYPE => $value instanceof PropertyStairwellType,
            self::PARKING => $value instanceof PropertyParking,
            self::FURNISHING => $value instanceof PropertyFurnishing,
        };
    }
}