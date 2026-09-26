<?php

declare(strict_types=1);

namespace App\Domain\Property;

use App\Domain\LabeledEnum;

enum PropertyStructure: string implements LabeledEnum
{
    case BRICK = 'brick';
    case PANEL = 'panel';
    case SLIPFORM = 'slipform';
    case WOOD = 'wood';
    case LIGHTWEIGHT = 'lightweight';
    case ADOBE = 'adobe';
    case SILICATE = 'silicate';
    case STONE_AND_BRICK = 'stone_and_brick';
    case LOG_HOUSE = 'log_house';
    case MIXED_MASONRY = 'mixed_masonry';
    case OTHER = 'other';

    public function label(): string
    {
        return match ($this) {
            self::BRICK => 'Tégla',
            self::PANEL => 'Panel',
            self::SLIPFORM => 'Csúsztatott zsalus',
            self::WOOD => 'Fa',
            self::LIGHTWEIGHT => 'Könnyűszerkezetes',
            self::ADOBE => 'Vályog',
            self::SILICATE => 'Szilikát',
            self::STONE_AND_BRICK => 'Kő és tégla',
            self::LOG_HOUSE => 'Rönkház',
            self::MIXED_MASONRY => 'Vegyes falazat',
            self::OTHER => 'Egyéb',
        };
    }
}