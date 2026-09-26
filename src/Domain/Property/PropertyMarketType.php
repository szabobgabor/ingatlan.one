<?php

declare(strict_types=1);

namespace App\Domain\Property;

use App\Domain\LabeledEnum;

enum PropertyMarketType: string implements LabeledEnum
{
    case NEW_BUILD = 'new_build';
    case RESALE = 'resale';

    public function label(): string
    {
        return match ($this) {
            self::NEW_BUILD => 'Új építésű',
            self::RESALE => 'Használt',
        };
    }
}