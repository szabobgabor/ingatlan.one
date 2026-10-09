<?php

use App\Domain\Location\LocationData;
use App\Domain\Property\PropertyAttribute;
use App\Domain\Property\PropertyAttributeData;
use App\Domain\Property\PropertyImageData;

return new \App\Domain\Property\PropertyData(
    'M',
    0,
    new LocationData(
        null,
        'Győr',
        '9023',
        'Adyváros',
        'Kassák Lajos utca',
        map: new \App\Domain\Location\MapData(
            'https://www.google.com/maps/place/Gy%C5%91r,+Adyv%C3%A1ros,+9023/@47.6736313,17.6451542,15z/',
            '/images/location/gyor-adyvaros.png',
            'Győr, Adyváros'
        )
    ),
    <<<'DESCRIPTION'
        todo
        DESCRIPTION,
    \App\Domain\Property\PropertyMarketType::RESALE,
    53,
    null,
    2.6,
    1,
    1,
    2,
    \App\Domain\Property\PropertyCondition::GOOD,
    \App\Domain\Property\PropertyCondition::AVERAGE,
    \App\Domain\Property\PropertyStructure::PANEL,
    1970,
    [
        new PropertyAttributeData(PropertyAttribute::TITLE, 'todo'),
        new PropertyAttributeData(PropertyAttribute::QUOTE, 'todo'),
        new PropertyAttributeData(PropertyAttribute::HIGHLIGHT, ['timer', 'todo']),
        new PropertyAttributeData(PropertyAttribute::HIGHLIGHT, ['piggy-bank', 'todo']),
        new PropertyAttributeData(PropertyAttribute::HIGHLIGHT, ['bed', 'todo']),
        new PropertyAttributeData(PropertyAttribute::HIGHLIGHT, ['thermometer', 'todo']),
        new PropertyAttributeData(PropertyAttribute::HIGHLIGHT, ['blinds', 'todo']),
        new PropertyAttributeData(PropertyAttribute::VIEW, \App\Domain\Property\PropertyView::STREET),
        new PropertyAttributeData(PropertyAttribute::BUILDING_FLOOR_COUNT, 5),
        new PropertyAttributeData(PropertyAttribute::BUILDING_APARTMENT_COUNT, 15),
        new PropertyAttributeData(PropertyAttribute::APARTMENTS_PER_FLOOR, 3),
        new PropertyAttributeData(PropertyAttribute::COMFORT_LEVEL, \App\Domain\Property\PropertyComfortLevel::COMFORT),
        new PropertyAttributeData(PropertyAttribute::HEATING, \App\Domain\Property\PropertyHeating::DISTRICT_HEATING_WITH_INDIVIDUAL_METER),
        new PropertyAttributeData(PropertyAttribute::HEAT_DISTRIBUTION, \App\Domain\Property\PropertyHeatDistribution::RADIATOR),
        new PropertyAttributeData(PropertyAttribute::LIVING_ROOM_ORIENTATION, \App\Domain\Property\Orientation::WEST),
        new PropertyAttributeData(PropertyAttribute::NATURAL_LIGHT, \App\Domain\Property\PropertyNaturalLight::GOOD),
        new PropertyAttributeData(PropertyAttribute::ROLLER_SHUTTER, true),
        new PropertyAttributeData(PropertyAttribute::STAIRWELL_TYPE, \App\Domain\Property\PropertyStairwellType::ENCLOSED),
        new PropertyAttributeData(PropertyAttribute::COMMON_COST, 16_900),
        new PropertyAttributeData(PropertyAttribute::HEATING_COST, 17_900),
        new PropertyAttributeData(PropertyAttribute::PARKING, \App\Domain\Property\PropertyParking::PAID_PUBLIC),
    ],
    [
        new PropertyImageData('szoba2-2.jpg'),
        new PropertyImageData('alaprajz.jpg', \App\Domain\Property\PropertyImageType::FLOOR_PLAN),
        new PropertyImageData('szoba2-1.jpg'),
        new PropertyImageData('szoba1-1.jpg'),
        new PropertyImageData('kozlekedo-1.jpg'),
        new PropertyImageData('konyha-1.jpg'),
        new PropertyImageData('furdo.jpg'),
    ]

);