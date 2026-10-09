<?php

use App\Domain\Property\PropertyAttribute;
use App\Domain\Property\PropertyAttributeData;
use App\Domain\Property\PropertyImageData;

return new \App\Domain\Property\PropertyData(
    'M332485',
    49_900_000,
    new \App\Domain\Location\LocationData(
        null,
        'Győr',
        '9023',
        'Nádorváros',
        'Török István utca',
        map: new \App\Domain\Location\MapData(
            'https://www.google.com/maps/place/Gy%C5%91r,+N%C3%A1dorv%C3%A1ros,+9023/@47.6783353,17.6368553,15z/',
            '/images/location/gyor-nadorvaros.png',
            'Győr, Nádorváros'
        )
    ),
    <<<'DESCRIPTION'
        <p>Győr egyik közkedvelt városrészében, a <strong>Török István utcában</strong> kínálok megvételre egy <strong>53 m²-es, 1+1 szobás, hallos panellakást</strong>, amely <strong>azonnal birtokba vehető</strong>.</p>

        <p>Ha gyermeked most kezdi az egyetemet Győrben, érdemes hosszabb távon gondolkodni. Az albérletre kifizetett havi százezrek soha nem térnek vissza, míg egy saját lakás nemcsak otthont biztosít az egyetemi évek alatt, hanem értékálló befektetés is lehet.</p>
        
        <p>A lakás elosztása lehetővé teszi, hogy akár két hallgató is kényelmesen használja, így a lakhatási költségek is könnyen megoszthatók. Az 53 m²-es alapterület, a külön nyíló szobák és a praktikus hall élhető tereket biztosítanak a mindennapokhoz.</p>
        
        <p>A társasház panelprogramon átesett, műanyag nyílászárókkal rendelkezik, a fűtés egyedi mérésű, így a fenntartási költségek kedvezően alakulnak. Az ingatlan jelenleg üres, ezért <strong>akár azonnal költözhető</strong>, így a szeptemberi tanévkezdés előtt már berendezhető.</p>
        
        <p>A Török István utca Nádorváros egyik kedvelt része, ahonnan az egyetem, a belváros, bevásárlási lehetőségek, buszmegállók és minden fontos szolgáltatás könnyen elérhető.</p>
        
        <p>Ha olyan lakást keresel, amely az egyetemi évek alatt kényelmes otthon lehet, később pedig akár befektetésként vagy kiadásra is kiválóan hasznosítható, érdemes személyesen is megnézni.</p>
        
        <h2>Főbb jellemzők:</h2>
        
        <ul>
            <li>53 m² alapterület</li>
            <li>1+1 szoba + hall</li>
            <li>4. emelet</li>
            <li>panelprogramos társasház</li>
            <li>műanyag nyílászárók</li>
            <li>távfűtés egyedi méréssel</li>
            <li>azonnal birtokba vehető</li>
            <li>Győr, Nádorváros – Török István utca</li>
        </ul>

        DESCRIPTION,
    \App\Domain\Property\PropertyMarketType::RESALE,
    53,
    null,
    2.6,
    1,
    1,
    4,
    \App\Domain\Property\PropertyCondition::AVERAGE,
    \App\Domain\Property\PropertyCondition::AVERAGE,
    \App\Domain\Property\PropertyStructure::PANEL,
    1972,
    [
        new PropertyAttributeData(PropertyAttribute::TITLE, 'Egyetem Győrben? Lehet, hogy ez jobb döntés, mint évekig albérletet fizetni.'),
        new PropertyAttributeData(PropertyAttribute::QUOTE, 'A kérdés nem az, hogy hol fog lakni. Hanem az, hogy mire költöd ugyanazt a pénzt. Albérletre vagy egy saját lakásra, amely évek múlva is értéket képvisel.'),
        new PropertyAttributeData(PropertyAttribute::HIGHLIGHT, ['timer', 'Azonnal birtokba vehető']),
        new PropertyAttributeData(PropertyAttribute::HIGHLIGHT, ['piggy-bank', 'Kedvező fenntartás']),
        new PropertyAttributeData(PropertyAttribute::HIGHLIGHT, ['bed', 'Két külön használható szoba']),
        new PropertyAttributeData(PropertyAttribute::HIGHLIGHT, ['thermometer', 'Műanyag nyílászárók']),
        new PropertyAttributeData(PropertyAttribute::HIGHLIGHT, ['shrub', 'Csendes, parkos környezet']),
        new PropertyAttributeData(PropertyAttribute::VIEW, \App\Domain\Property\PropertyView::STREET),
        new PropertyAttributeData(PropertyAttribute::BUILDING_FLOOR_COUNT, 4),
        new PropertyAttributeData(PropertyAttribute::COMFORT_LEVEL, \App\Domain\Property\PropertyComfortLevel::COMFORT),
        new PropertyAttributeData(PropertyAttribute::HEATING, \App\Domain\Property\PropertyHeating::DISTRICT_HEATING_WITH_INDIVIDUAL_METER),
        new PropertyAttributeData(PropertyAttribute::HEAT_DISTRIBUTION, \App\Domain\Property\PropertyHeatDistribution::RADIATOR),
        new PropertyAttributeData(PropertyAttribute::NATURAL_LIGHT, \App\Domain\Property\PropertyNaturalLight::GOOD),
        new PropertyAttributeData(PropertyAttribute::STAIRWELL_TYPE, \App\Domain\Property\PropertyStairwellType::ENCLOSED),
        new PropertyAttributeData(PropertyAttribute::COMMON_COST, 8_750),
        new PropertyAttributeData(PropertyAttribute::PARKING, \App\Domain\Property\PropertyParking::FREE_PUBLIC),
        new PropertyAttributeData(PropertyAttribute::FURNISHING, \App\Domain\Property\PropertyFurnishing::PARTIALLY_FURNISHED),
    ],
    [
        new PropertyImageData('szoba2-1.jpg'),
        new PropertyImageData('alaprajz.jpg', \App\Domain\Property\PropertyImageType::FLOOR_PLAN),
        new PropertyImageData('hall.jpg'),
        new PropertyImageData('szoba1-1.jpg'),
        new PropertyImageData('konyha-1.jpg'),
        new PropertyImageData('furdo-1.jpg'),
        new PropertyImageData('kozlekedo-1.jpg'),
        new PropertyImageData('lepcsohaz.jpg'),
    ]

);

/*
return [
    'id' => 'M332485',
    'title' => 'Egyetem Győrben? Lehet, hogy ez jobb döntés, mint évekig albérletet fizetni.',
    'price' => 49900000,
    'location' => 'Győr, Nádorváros',
    'features' => [
        ['label' => 'alapterület', 'value' => '53 m<sup>2</sup>'],
        ['label' => 'szobaszám', 'value' => '1+1'],
        ['label' => 'emelet', 'value' => '4'],
        ['label' => 'építés éve', 'value' => '1972'],
    ],
    'quote' => 'A kérdés nem az, hogy hol fog lakni. Hanem az, hogy mire költöd ugyanazt a pénzt.
        Albérletre vagy egy saját lakásra, amely évek múlva is értéket képvisel.',
    'highlights' => [
        ['icon' => 'timer', 'value' => 'Azonnal birtokba vehető'],
        ['icon' => 'piggy-bank', 'value' => 'Kedvező fenntartás'],
        ['icon' => 'bed', 'value' => 'Két külön használható szoba'],
        ['icon' => 'thermometer', 'value' => 'Műanyag nyílászárók'],
        ['icon' => 'shrub', 'value' => 'Csendes, parkos környezet'],
    ],
    'mainImage' => 'szoba2-1.jpg',
    'gallery' => [
        'szoba2-1.jpg',
        'alaprajz.jpg',
        'hall.jpg',
        'szoba1-1.jpg',
        'konyha-1.jpg',
        'furdo-1.jpg',
        'kozlekedo-1.jpg',
        'lepcsohaz.jpg',
    ],
    'description' => <<<DESCRIPTION
<p>Győr egyik közkedvelt városrészében, a <strong>Török István utcában</strong> kínálok megvételre egy <strong>53 m²-es, 1+1 szobás, hallos panellakást</strong>, amely <strong>azonnal birtokba vehető</strong>.</p>

<p>Ha gyermeked most kezdi az egyetemet Győrben, érdemes hosszabb távon gondolkodni. Az albérletre kifizetett havi százezrek soha nem térnek vissza, míg egy saját lakás nemcsak otthont biztosít az egyetemi évek alatt, hanem értékálló befektetés is lehet.</p>

<p>A lakás elosztása lehetővé teszi, hogy akár két hallgató is kényelmesen használja, így a lakhatási költségek is könnyen megoszthatók. Az 53 m²-es alapterület, a külön nyíló szobák és a praktikus hall élhető tereket biztosítanak a mindennapokhoz.</p>

<p>A társasház panelprogramon átesett, műanyag nyílászárókkal rendelkezik, a fűtés egyedi mérésű, így a fenntartási költségek kedvezően alakulnak. Az ingatlan jelenleg üres, ezért <strong>akár azonnal költözhető</strong>, így a szeptemberi tanévkezdés előtt már berendezhető.</p>

<p>A Török István utca Nádorváros egyik kedvelt része, ahonnan az egyetem, a belváros, bevásárlási lehetőségek, buszmegállók és minden fontos szolgáltatás könnyen elérhető.</p>

<p>Ha olyan lakást keresel, amely az egyetemi évek alatt kényelmes otthon lehet, később pedig akár befektetésként vagy kiadásra is kiválóan hasznosítható, érdemes személyesen is megnézni.</p>

<h2>Főbb jellemzők:</h2>

<ul>
    <li>53 m² alapterület</li>
    <li>1+1 szoba + hall</li>
    <li>4. emelet</li>
    <li>panelprogramos társasház</li>
    <li>műanyag nyílászárók</li>
    <li>távfűtés egyedi méréssel</li>
    <li>azonnal birtokba vehető</li>
    <li>Győr, Nádorváros – Török István utca</li>
</ul>
DESCRIPTION,
    'details' => [
        [
            'icon' => 'house',
            'title' => 'Alapadatok',
            'items' => [
                ['label' => 'Kategória', 'value' => 'Használt'],
                ['label' => 'Épület szerkezete', 'value' => 'Panel'],
                ['label' => 'Ingatlan állapot', 'value' => 'Átlagos'],
                ['label' => 'Épület állapota kívül', 'value' => 'Átlagos'],
                ['label' => 'Építés éve', 'value' => '1972'],
                ['label' => 'Kilátás', 'value' => 'Utca'],
            ]
        ],
        [
            'icon' => 'ruler',
            'title' => 'Méretek',
            'items' => [
                ['label' => 'Alapterület', 'value' => '53 m<sup>2</sup>'],
                ['label' => 'Belmagasság', 'value' => '2.6 m'],
                ['label' => 'Emeletek száma az épületben', 'value' => '4'],
            ]
        ],
        [
            'icon' => 'bed',
            'title' => 'Helyiségek',
            'items' => [
                ['label' => 'Egész szobák száma', 'value' => '1'],
                ['label' => 'Félszobák száma', 'value' => '1'],
                ['label' => 'Nappali tájolása', 'value' => 'Délkeleti'],
            ]
        ],
        [
            'icon' => 'thermometer',
            'title' => 'Komfort',
            'items' => [
                ['label' => 'Komfortfokozat', 'value' => 'Összkomfort'],
                ['label' => 'Fűtés', 'value' => 'Távfűtés, Házközponti egyedi mérővel'],
                ['label' => 'Hőleadás fajtája', 'value' => 'Radiátoros fűtés'],
                ['label' => 'Fényviszony', 'value' => 'Jó'],
            ]
        ],
        [
            'icon' => 'info',
            'title' => 'Egyéb',
            'items' => [
                ['label' => 'Lépcsőház típusa', 'value' => 'Zárt'],
                ['label' => 'Közös költség', 'value' => '8 750 Ft'],
                ['label' => 'Parkolás', 'value' => 'Közterületen ingyenes'],
                ['label' => 'Bútorozott', 'value' => 'Részlegesen bútorozott, berendezett'],
            ]
        ],
    ],
    'map' => [
        'url' => 'https://www.google.com/maps/place/Gy%C5%91r,+N%C3%A1dorv%C3%A1ros,+9023/@47.6783353,17.6368553,15z/',
        'imgSrc' => '/images/location/gyor-nadorvaros.png',
        'imgAlt' => 'Győr, Nádorváros'
    ]
];
*/