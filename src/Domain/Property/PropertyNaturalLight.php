<?php

declare(strict_types=1);

namespace App\Domain\Property;

use App\Domain\LabeledEnum;

enum PropertyNaturalLight: string implements LabeledEnum
{
    case POOR = 'poor';
    case AVERAGE = 'average';
    case GOOD = 'good';
    case SUNNY = 'sunny';

    public function label(): string
    {
        return match ($this) {
            self::POOR => 'Rossz',
            self::AVERAGE => 'Közepes',
            self::GOOD => 'Jó',
            self::SUNNY => 'Napfényes',
        };
    }
}