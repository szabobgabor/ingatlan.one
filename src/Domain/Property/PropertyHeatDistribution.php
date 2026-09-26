<?php

declare(strict_types=1);

namespace App\Domain\Property;

use App\Domain\LabeledEnum;

enum PropertyHeatDistribution: string implements LabeledEnum
{
    case AIR = 'air';
    case RADIATOR = 'radiator';
    case UNDERFLOOR = 'underfloor';
    case WALL = 'wall';
    case CEILING = 'ceiling';
    case AIR_CONDITIONING = 'air_conditioning';

    public function label(): string
    {
        return match ($this) {
            self::AIR => 'Légfűtés',
            self::RADIATOR => 'Radiátoros fűtés',
            self::UNDERFLOOR => 'Padlófűtés',
            self::WALL => 'Falfűtés',
            self::CEILING => 'Mennyezetfűtés',
            self::AIR_CONDITIONING => 'Légkondicionáló',
        };
    }
}