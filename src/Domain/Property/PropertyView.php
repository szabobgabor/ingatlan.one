<?php

declare(strict_types=1);

namespace App\Domain\Property;

use App\Domain\LabeledEnum;

enum PropertyView: string implements LabeledEnum
{
    case STREET = 'street';
    case YARD = 'yard';
    case GARDEN = 'garden';
    case PANORAMA = 'panorama';

    public function label(): string
    {
        return match ($this) {
            self::STREET => 'Utcai',
            self::YARD => 'Udvari',
            self::GARDEN => 'Kertre néző',
            self::PANORAMA => 'Panorámás',
        };
    }
}