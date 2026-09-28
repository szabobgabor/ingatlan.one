<?php

use App\Domain\Location\LocationData;
use App\Domain\Property\PropertyAttribute;
use App\Domain\Property\PropertyAttributeData;
use App\Domain\Property\PropertyImageData;

return new \App\Domain\Property\PropertyData(
    'M332390',
    43900000,
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
        <p>Győr egyik legkedveltebb városrészében, Adyvárosban, a <strong>Kassák Lajos utcában</strong> kínálok megvételre egy <strong>53 m²-es, 1+1 szobás, hallos, 2. emeleti panellakást</strong>, amely <strong>azonnal birtokba vehető</strong>.</p>
        
        <p>Ha gyermeked most kezdi az egyetemet Győrben, érdemes hosszabb távon gondolkodni. Az albérletre kifizetett havi összegek soha nem térnek vissza, míg egy saját lakás nemcsak otthont biztosít az egyetemi évek alatt, hanem értékálló befektetés is lehet.
        
        <p>A lakás elosztása lehetővé teszi, hogy akár két hallgató is kényelmesen használja, így a lakhatási költségek is könnyen megoszthatók. A külön szobák és a praktikus hall élhető, jól használható tereket biztosítanak a mindennapokban.
        
        <p>A társasház szigetelt, a lakás műanyag nyílászárókkal rendelkezik, amelyek redőnnyel és szúnyoghálóval is felszereltek. Az elektromos hálózat már megújult, így ezen sem kell a közeljövőben gondolkodni. Az ingatlan jelenleg üres, ezért <strong>akár azonnal birtokba vehető</strong>, így a szeptemberi tanévkezdésre már kényelmesen berendezhető.
        
        <p>A Kassák Lajos utca kiváló választás egyetemisták számára: a közelben bevásárlási lehetőségek, buszmegállók, szolgáltatások, valamint a Győr Plaza is könnyen elérhető, az egyetem és a belváros pedig néhány perc alatt megközelíthető.
        
        <p>Ha olyan lakást keresel, amely az egyetemi évek alatt kényelmes otthon lehet, később pedig akár befektetésként vagy kiadásra is remekül hasznosítható, ezt az ingatlant érdemes személyesen is megnézni.
        
        <h2>Főbb jellemzők:</h2>
        
        <ul>
            <li>53 m² alapterület</li>
            <li>1+1 szoba + hall</li>
            <li>2. emelet</li>
            <li>panelprogramos társasház</li>
            <li>műanyag nyílászárók</li>
            <li>redőny és szúnyogháló</li>
            <li>felújított elektromos hálózat</li>
            <li>távfűtés</li>
            <li>azonnal birtokba vehető</li>
            <li>Győr, Adyváros – Kassák Lajos utca</li>
        </ul>    
                    
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
        new PropertyAttributeData(PropertyAttribute::TITLE, 'Egyetem Győrben? Lehet, hogy ez jobb döntés, mint évekig albérletet fizetni.'),
        new PropertyAttributeData(PropertyAttribute::QUOTE, 'Egy otthon, amely az egyetemi éveken túl is értéket képvisel. Praktikus alaprajz, azonnali költözhetőség és minden fontos szolgáltatás néhány percnyi távolságra.'),
        new PropertyAttributeData(PropertyAttribute::HIGHLIGHT, ['timer', 'Azonnal birtokba vehető']),
        new PropertyAttributeData(PropertyAttribute::HIGHLIGHT, ['piggy-bank', 'Kedvező fenntartás']),
        new PropertyAttributeData(PropertyAttribute::HIGHLIGHT, ['bed', 'Két külön használható szoba']),
        new PropertyAttributeData(PropertyAttribute::HIGHLIGHT, ['thermometer', 'Műanyag nyílászárók']),
        new PropertyAttributeData(PropertyAttribute::HIGHLIGHT, ['blinds', 'Redőny és szúnyogháló']),
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

/*return [
    'id' => 'M332390',
    'title' => 'Egyetem Győrben? Lehet, hogy ez jobb döntés, mint évekig albérletet fizetni.',
    'price' => 43900000,
    'location' => 'Győr, Adyváros',
    'features' => [
        ['label' => 'alapterület', 'value' => '53 m<sup>2</sup>'],
        ['label' => 'szobaszám', 'value' => '2'],
        ['label' => 'emelet', 'value' => '2'],
        ['label' => 'energetika', 'value' => 'A+'],
    ],
    'quote' => 'Egy otthon, amely az egyetemi éveken túl is értéket képvisel. Praktikus alaprajz, azonnali költözhetőség és minden fontos szolgáltatás néhány percnyi távolságra.',
    'highlights' => [
        ['icon' => 'timer', 'value' => 'Azonnal birtokba vehető'],
        ['icon' => 'piggy-bank', 'value' => 'Kedvező fenntartás'],
        ['icon' => 'bed', 'value' => 'Két külön használható szoba'],
        ['icon' => 'thermometer', 'value' => 'Műanyag nyílászárók'],
        ['icon' => 'blinds', 'value' => 'Redőny és szúnyogháló'],
    ],
    'mainImage' => 'szoba2-2.jpg',
    'gallery' => [
        'szoba2-2.jpg',
        'alaprajz.jpg',
        'szoba2-1.jpg',
        'szoba1-1.jpg',
        'kozlekedo-1.jpg',
        'konyha-1.jpg',
        'furdo.jpg',
    ],
    'description' => <<<DESCRIPTION
<p>Győr egyik legkedveltebb városrészében, Adyvárosban, a <strong>Kassák Lajos utcában</strong> kínálok megvételre egy <strong>53 m²-es, 1+1 szobás, hallos, 2. emeleti panellakást</strong>, amely <strong>azonnal birtokba vehető</strong>.</p>

<p>Ha gyermeked most kezdi az egyetemet Győrben, érdemes hosszabb távon gondolkodni. Az albérletre kifizetett havi összegek soha nem térnek vissza, míg egy saját lakás nemcsak otthont biztosít az egyetemi évek alatt, hanem értékálló befektetés is lehet.

<p>A lakás elosztása lehetővé teszi, hogy akár két hallgató is kényelmesen használja, így a lakhatási költségek is könnyen megoszthatók. A külön szobák és a praktikus hall élhető, jól használható tereket biztosítanak a mindennapokban.

<p>A társasház szigetelt, a lakás műanyag nyílászárókkal rendelkezik, amelyek redőnnyel és szúnyoghálóval is felszereltek. Az elektromos hálózat már megújult, így ezen sem kell a közeljövőben gondolkodni. Az ingatlan jelenleg üres, ezért <strong>akár azonnal birtokba vehető</strong>, így a szeptemberi tanévkezdésre már kényelmesen berendezhető.

<p>A Kassák Lajos utca kiváló választás egyetemisták számára: a közelben bevásárlási lehetőségek, buszmegállók, szolgáltatások, valamint a Győr Plaza is könnyen elérhető, az egyetem és a belváros pedig néhány perc alatt megközelíthető.

<p>Ha olyan lakást keresel, amely az egyetemi évek alatt kényelmes otthon lehet, később pedig akár befektetésként vagy kiadásra is remekül hasznosítható, ezt az ingatlant érdemes személyesen is megnézni.

<h2>Főbb jellemzők:</h2>

<ul>
    <li>53 m² alapterület</li>
    <li>1+1 szoba + hall</li>
    <li>2. emelet</li>
    <li>panelprogramos társasház</li>
    <li>műanyag nyílászárók</li>
    <li>redőny és szúnyogháló</li>
    <li>felújított elektromos hálózat</li>
    <li>távfűtés</li>
    <li>azonnal birtokba vehető</li>
    <li>Győr, Adyváros – Kassák Lajos utca</li>
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
                ['label' => 'Épület állapota kívül', 'value' => 'Jó'],
                ['label' => 'Építés éve', 'value' => '1970'],
                ['label' => 'Kilátás', 'value' => 'Utca'],
                ['label' => 'Energetikai besorolás', 'value' => 'A+'],
                ['label' => 'Panelprogram', 'value' => 'igen'],
                ['label' => 'Lift', 'value' => 'Nincs'],
            ]
        ],
        [
            'icon' => 'ruler',
            'title' => 'Méretek',
            'items' => [
                ['label' => 'Alapterület', 'value' => '53 m<sup>2</sup>'],
                ['label' => 'Belmagasság (m)', 'value' => '2.6 m'],
                ['label' => 'Emeletek száma az épületben', 'value' => '5'],
                ['label' => 'Lakások száma az épületben', 'value' => '15'],
                ['label' => 'Lakások száma az adott emeleten', 'value' => '3'],
            ]
        ],
        [
            'icon' => 'bed',
            'title' => 'Helyiségek',
            'items' => [
                ['label' => 'Egész szobák száma', 'value' => '1'],
                ['label' => 'Félszobák száma', 'value' => '1'],
                ['label' => 'Nappali tájolása', 'value' => 'Nyugati'],
            ]
        ],
        [
            'icon' => 'thermometer',
            'title' => 'Komfort',
            'items' => [
                ['label' => 'Komfortfokozat', 'value' => 'Összkomfort'],
                ['label' => 'Fűtés', 'value' => 'Távfűtés'],
                ['label' => 'Hőleadás fajtája', 'value' => 'Radiátoros fűtés'],
                ['label' => 'Fényviszony', 'value' => 'Jó'],
                ['label' => 'Redőny', 'value' => 'igen'],
            ]
        ],
        [
            'icon' => 'info',
            'title' => 'Egyéb',
            'items' => [
                ['label' => 'Lépcsőház típusa', 'value' => 'Zárt'],
                ['label' => 'Közös költség', 'value' => '16&nbsp;900 Ft'],
                ['label' => 'Fűtés költség', 'value' => '17&nbsp;000 Ft'],
                ['label' => 'Parkolás', 'value' => 'Közterületen fizetős'],
            ]
        ],
    ],
    'map' => [
        'url' => 'https://www.google.com/maps/place/Gy%C5%91r,+Adyv%C3%A1ros,+9023/@47.6736313,17.6451542,15z/',
        'imgSrc' => '/images/location/gyor-adyvaros.png',
        'imgAlt' => 'Győr, Adyváros'
    ]
];
*/