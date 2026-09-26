<?php

declare(strict_types=1);

namespace App\Domain\Property;

use App\Domain\LabeledEnum;

enum PropertyParking: string implements LabeledEnum
{
    case GARAGE = 'garage';
    case PRIVATE_CLOSED_SPACE = 'private_closed_space';
    case PRIVATE_OPEN_SPACE = 'private_open_space';
    case PAID_PUBLIC = 'paid_public';
    case FREE_PUBLIC = 'free_public';
    case NONE = 'none';

    public function label(): string
    {
        return match ($this) {
            self::GARAGE => 'Teremgarázs / garázs',
            self::PRIVATE_CLOSED_SPACE => 'Zárt kocsibeálló',
            self::PRIVATE_OPEN_SPACE => 'Nyílt kocsibeálló',
            self::PAID_PUBLIC => 'Közterületen fizetős',
            self::FREE_PUBLIC => 'Közterületen ingyenes',
            self::NONE => 'Nincs',
        };
    }
}