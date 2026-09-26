<?php

declare(strict_types=1);

namespace App\Domain\Property;

use App\Domain\LabeledEnum;

enum PropertyCondition: string implements LabeledEnum
{
    case TO_BE_DEMOLISHED = 'to_be_demolished';
    case NEEDS_RENOVATION = 'needs_renovation';
    case AVERAGE = 'average';
    case GOOD = 'good';
    case EXCELLENT = 'excellent';

    public function label(): string
    {
        return match ($this) {
            self::TO_BE_DEMOLISHED => 'Bontandó',
            self::NEEDS_RENOVATION => 'Felújítandó',
            self::AVERAGE => 'Átlagos',
            self::GOOD => 'Jó',
            self::EXCELLENT => 'Kiváló',
        };
    }
}