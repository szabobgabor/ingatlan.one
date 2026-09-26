<?php

declare(strict_types=1);

namespace App\Domain\Property;

use App\Domain\LabeledEnum;

enum PropertyStairwellType: string implements LabeledEnum
{
    case ENCLOSED = 'enclosed';
    case CIRCULAR_CORRIDOR = 'circular_corridor';
    case OTHER = 'other';

    public function label(): string
    {
        return match ($this) {
            self::ENCLOSED => 'Zárt',
            self::CIRCULAR_CORRIDOR => 'Körfolyosó',
            self::OTHER => 'Egyéb',
        };
    }
}