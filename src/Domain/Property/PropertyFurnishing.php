<?php

declare(strict_types=1);

namespace App\Domain\Property;

use App\Domain\LabeledEnum;

enum PropertyFurnishing: string implements LabeledEnum
{
    case FURNISHED = 'furnished';
    case UNFURNISHED = 'unfurnished';
    case PARTIALLY_FURNISHED = 'partially_furnished';
    case UPON_REQUEST = 'upon_request';

    public function label(): string
    {
        return match ($this) {
            self::FURNISHED => 'Bútorozott, berendezett',
            self::UNFURNISHED => 'Bútorozatlan',
            self::PARTIALLY_FURNISHED => 'Részlegesen bútorozott, berendezett',
            self::UPON_REQUEST => 'Igény szerint kialakítható',
        };
    }
}