<?php

declare(strict_types=1);

namespace App\Domain\Property;

enum PropertyAttribute: string {
    case TITLE = 'title';
    case QUOTE = 'quote';
    case HIGHLIGHT = 'highlight';
    case VIEW = 'view';
    case BUILDING_FLOOR_COUNT = 'building_floor_count';
    case BUILDING_APARTMENT_COUNT = 'building_apartment_count';
    case APARTMENTS_PER_FLOOR = 'apartments_per_floor';
    case COMFORT_LEVEL = 'comfort_level';
    case HEATING = 'heating';
    case HEAT_DISTRIBUTION = 'heat_distribution';
    case LIVING_ROOM_ORIENTATION = 'living_room_orientation';
    case NATURAL_LIGHT = 'natural_light';
    case AIR_CONDITIONING = 'air_conditioning';
    case ROLLER_SHUTTER = 'roller_shutter';
    case STAIRWELL_TYPE = 'stairwell_type';
    case COMMON_COST = 'common_cost';
    case HEATING_COST = 'heating_cost';
    case PARKING = 'parking';
    case FURNISHING = 'furnishing';
    case BUILT_IN_KITCHEN = 'built_in_kitchen';

    public function type(): PropertyAttributeType {
        return match ($this) {
            self::TITLE,
            self::QUOTE => PropertyAttributeType::STRING,

            self::BUILDING_FLOOR_COUNT,
            self::BUILDING_APARTMENT_COUNT,
            self::APARTMENTS_PER_FLOOR,
            self::COMMON_COST,
            self::HEATING_COST => PropertyAttributeType::INT,

            self::AIR_CONDITIONING,
            self::ROLLER_SHUTTER,
            self::BUILT_IN_KITCHEN => PropertyAttributeType::BOOL,

            self::HIGHLIGHT => PropertyAttributeType::ICON_VALUE,
            self::VIEW => PropertyAttributeType::VIEW,
            self::COMFORT_LEVEL => PropertyAttributeType::COMFORT_LEVEL,
            self::HEATING => PropertyAttributeType::HEATING,
            self::HEAT_DISTRIBUTION => PropertyAttributeType::HEAT_DISTRIBUTION,
            self::LIVING_ROOM_ORIENTATION => PropertyAttributeType::ORIENTATION,
            self::NATURAL_LIGHT => PropertyAttributeType::NATURAL_LIGHT,
            self::STAIRWELL_TYPE => PropertyAttributeType::STAIRWELL_TYPE,
            self::PARKING => PropertyAttributeType::PARKING,
            self::FURNISHING => PropertyAttributeType::FURNISHING,
        };
    }

    public function allowsMultipleValues(): bool
    {
        return match ($this) {
            self::HIGHLIGHT,
            self::HEATING,
            self::HEAT_DISTRIBUTION,
            self::PARKING => true,

            default => false,
        };
    }

    public function label(): string
    {
        return match ($this) {
            self::VIEW => 'Kilátás',
            self::BUILDING_FLOOR_COUNT => 'Emeletek száma az épületben',
            self::BUILDING_APARTMENT_COUNT => 'Lakások száma az épületben',
            self::APARTMENTS_PER_FLOOR => 'Lakások száma az emeleten',
            self::COMFORT_LEVEL => 'Komfortfokozat',
            self::HEATING => 'Fűtés',
            self::HEAT_DISTRIBUTION => 'Hőleadás fajtája',
            self::LIVING_ROOM_ORIENTATION => 'Nappali tájolása',
            self::NATURAL_LIGHT => 'Fényviszony',
            self::AIR_CONDITIONING => 'Légkondicionáló',
            self::ROLLER_SHUTTER => 'Redőny',
            self::STAIRWELL_TYPE => 'Lépcsőház típusa',
            self::COMMON_COST => 'Közös költség',
            self::HEATING_COST => 'Fűtés költség',
            self::PARKING => 'Parkolás',
            self::FURNISHING => 'Bútorozottság',
            self::BUILT_IN_KITCHEN => 'Beépített konyhabútor',
            default => $this->value,
        };
    }
}