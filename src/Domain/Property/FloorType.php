<?php

namespace App\Domain\Property;

use App\Domain\LabeledEnum;

enum FloorType: string implements LabeledEnum
{
    case BASEMENT = 'basement';
    case SOUTERRAIN = 'souterrain';
    case SEMI_SOUTERRAIN = 'semi_souterrain';
    case GROUND_FLOOR = 'ground_floor';
    case RAISED_GROUND_FLOOR = 'raised_ground_floor';
    case MEZZANINE = 'mezzanine';

    public function label(): string
    {
        return match ($this) {
            self::BASEMENT => 'Alagsor',
            self::SOUTERRAIN => 'Szuterén',
            self::SEMI_SOUTERRAIN => 'Félszuterén',
            self::GROUND_FLOOR => 'Földszint',
            self::RAISED_GROUND_FLOOR => 'Magasföldszint',
            self::MEZZANINE => 'Félemelet',
        };
    }
}