<?php

declare(strict_types=1);

namespace App\Domain\Property;

use App\Domain\LabeledEnum;

enum PropertyComfortLevel: string implements LabeledEnum
{
    case WITHOUT_COMFORT = 'without_comfort';
    case HALF_COMFORT = 'half_comfort';
    case COMFORT = 'comfort';
    case FULL_COMFORT = 'full_comfort';
    case DOUBLE_COMFORT = 'double_comfort';
    case LUXURY = 'luxury';

    public function label(): string
    {
        return match ($this) {
            self::WITHOUT_COMFORT => 'Komfort nélküli',
            self::HALF_COMFORT => 'Félkomfort',
            self::COMFORT => 'Komfort',
            self::FULL_COMFORT => 'Összkomfort',
            self::DOUBLE_COMFORT => 'Duplakomfort',
            self::LUXURY => 'Luxus',
        };
    }
}