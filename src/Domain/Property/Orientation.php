<?php

declare(strict_types=1);

namespace App\Domain\Property;

use App\Domain\LabeledEnum;

enum Orientation: string implements LabeledEnum
{
    case EAST = 'east';
    case SOUTH_EAST = 'south_east';
    case SOUTH = 'south';
    case SOUTH_WEST = 'south_west';
    case WEST = 'west';
    case NORTH_WEST = 'north_west';
    case NORTH = 'north';
    case NORTH_EAST = 'north_east';

    public function label(): string
    {
        return match ($this) {
            self::EAST => 'Keleti',
            self::SOUTH_EAST => 'Délkeleti',
            self::SOUTH => 'Déli',
            self::SOUTH_WEST => 'Délnyugati',
            self::WEST => 'Nyugati',
            self::NORTH_WEST => 'Északnyugati',
            self::NORTH => 'Északi',
            self::NORTH_EAST => 'Északkeleti',
        };
    }
}