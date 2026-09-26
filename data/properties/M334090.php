<?php

use App\Domain\Location\LocationData;
use App\Domain\Property\PropertyCondition;
use App\Domain\Property\PropertyHeating;
use App\Domain\Property\PropertyMarketType;
use App\Domain\Property\PropertyComfortLevel;
use App\Domain\Property\PropertyData;
use App\Domain\Property\PropertyImageData;
use App\Domain\Property\PropertyStructure;
use App\Domain\Property\PropertyAttributeData;
use App\Domain\Property\PropertyAttribute;
use App\Domain\Property\PropertyView;

return new PropertyData(
    id: 'M334090',
    price: 43900000,
    location: new LocationData(
        id: null,
        locality: 'Győr',
        subLocality: 'Nádorváros',
        postalCode: '9023',
        street: 'Szabolcska utca',
        map: new \App\Domain\Location\MapData(
            'https://www.google.com/maps/place/Gy%C5%91r,+N%C3%A1dorv%C3%A1ros,+9023/@47.6783353,17.6368553,15z/',
            '/images/location/gyor-nadorvaros.png',
            'Győr, Nádorváros'
        )
    ),
    area: 43,
    ceilingHeight: 2.7,
    rooms: 1,
    halfRooms: 1,
    floor: 2,
    marketType: PropertyMarketType::RESALE,
    exteriorCondition: PropertyCondition::GOOD,
    interiorCondition: PropertyCondition::GOOD,
    structure: PropertyStructure::BRICK,
    yearBuilt: 1970,
    description: <<<'DESCRIPTION'
        <p>Győr egyik legkedveltebb városrészében, Nádorvárosban, a <strong>Szabolcska utcában</strong> kínálok megvételre egy <strong>43 m²-es, 1+1 szobás, 2. emeleti lakást</strong>, amely kiváló választás lehet egyetemistáknak vagy első saját otthont keresőknek.</p>
        
        <p>Ha gyermeked most kezdi az egyetemet Győrben, érdemes hosszabb távon gondolkodni. Az albérletre kifizetett havi összegek soha nem térnek vissza, míg egy saját lakás nemcsak otthont biztosít az egyetemi évek alatt, hanem később is értékes befektetés maradhat.</p>
        
        <p>A lakás kialakítása lehetővé teszi, hogy akár két hallgató is használja, így a lakhatási költségek könnyen megoszthatók. A kisebb alapterület kedvező fenntartási költségeket jelent, miközben a külön félszoba a mindennapokban is praktikus megoldást kínál.</p>
        
        <p>Az ingatlan az elmúlt időszakban több felújításon is átesett: megújult az elektromos hálózat, új burkolatok és friss festés készült, a nyári komfortot klímaberendezés biztosítja. A távfűtés egyedi mérővel működik, így a rezsi jól tervezhető. A fürdőszoba felújítása már az új tulajdonosra vár, így azt saját ízlése szerint alakíthatja ki.</p>
        
        <p>A Szabolcska utca csendes, kedvelt része Nádorvárosnak, ahonnan a belváros néhány perc sétával elérhető. A közelben parkok, bevásárlási lehetőségek, buszmegállók és minden fontos szolgáltatás megtalálható, így az egyetemi évek alatt is kényelmes választás.</p>
        
        <p>Az ingatlan jelenleg bérlő által lakott, ezért a birtokbaadás várhatóan <strong>90 napon belül</strong>, illetve megegyezés szerint történhet. Ha a tanulmányok csak ősszel kezdődnek, ez sok esetben még kényelmes időzítést is jelenthet.</p>
        
        <p>Ha olyan lakást keresel, amely az egyetemi évek alatt otthonként szolgálhat, később pedig akár kiadásra vagy hosszú távú befektetésként is jól hasznosítható, ezt az ingatlant érdemes személyesen is megnézni.</p>
        
        <h2>Főbb jellemzők:</h2>
        
        <ul>
            <li>43 m² alapterület</li>
            <li>1+1 szoba</li>
            <li>2. emelet</li>
            <li>klímaberendezés</li>
            <li>felújított elektromos hálózat</li>
            <li>távfűtés egyedi méréssel</li>
            <li>részben felújított állapot</li>
            <li>csendes, kedvelt nádorvárosi környezet</li>
            <li>birtokbaadás 90 napon belül / megegyezés szerint</li>
            <li>Győr, Nádorváros – Szabolcska utca</li>
        </ul>
        DESCRIPTION,
    attributes: [
        new PropertyAttributeData(PropertyAttribute::TITLE, 'Egyetem Győrben? Lehet, hogy ez jobb döntés, mint évekig albérletet fizetni.'),
        new PropertyAttributeData(PropertyAttribute::QUOTE, 'Ideális első lakás, amely később is jó befektetés maradhat. Kedvező fenntartás és remek elhelyezkedés Győr egyik legnépszerűbb városrészében.'),
        new PropertyAttributeData(PropertyAttribute::HIGHLIGHT, ['air-vent', 'Légkondícionáló']),
        new PropertyAttributeData(PropertyAttribute::HIGHLIGHT, ['piggy-bank', 'Kedvező fenntartás']),
        new PropertyAttributeData(PropertyAttribute::HIGHLIGHT, ['bed', 'Két külön használható szoba']),
        new PropertyAttributeData(PropertyAttribute::HIGHLIGHT, ['thermometer', 'Műanyag nyílászárók']),
        new PropertyAttributeData(PropertyAttribute::HIGHLIGHT, ['shelving-unit', 'Saját tároló']),
        new PropertyAttributeData(PropertyAttribute::VIEW, PropertyView::YARD),
        new PropertyAttributeData(PropertyAttribute::BUILDING_FLOOR_COUNT, 4),
        new PropertyAttributeData(PropertyAttribute::APARTMENTS_PER_FLOOR, 4),
        new PropertyAttributeData(PropertyAttribute::COMFORT_LEVEL, PropertyComfortLevel::COMFORT),
        new PropertyAttributeData(PropertyAttribute::HEATING, PropertyHeating::DISTRICT_HEATING_WITH_INDIVIDUAL_METER),
        new PropertyAttributeData(PropertyAttribute::HEAT_DISTRIBUTION, \App\Domain\Property\PropertyHeatDistribution::RADIATOR),
        new PropertyAttributeData(PropertyAttribute::HEAT_DISTRIBUTION, \App\Domain\Property\PropertyHeatDistribution::AIR_CONDITIONING),
        new PropertyAttributeData(PropertyAttribute::LIVING_ROOM_ORIENTATION, \App\Domain\Property\Orientation::WEST),
        new PropertyAttributeData(PropertyAttribute::NATURAL_LIGHT, \App\Domain\Property\PropertyNaturalLight::SUNNY),
        new PropertyAttributeData(PropertyAttribute::AIR_CONDITIONING, true),
        new PropertyAttributeData(PropertyAttribute::ROLLER_SHUTTER, true),
        new PropertyAttributeData(PropertyAttribute::STAIRWELL_TYPE, \App\Domain\Property\PropertyStairwellType::ENCLOSED),
        new PropertyAttributeData(PropertyAttribute::COMMON_COST, 10_300),
        new PropertyAttributeData(PropertyAttribute::PARKING, \App\Domain\Property\PropertyParking::FREE_PUBLIC),
        new PropertyAttributeData(PropertyAttribute::FURNISHING, \App\Domain\Property\PropertyFurnishing::FURNISHED),
        new PropertyAttributeData(PropertyAttribute::BUILT_IN_KITCHEN, true),
    ],
    images: [
        new PropertyImageData('szoba-3.jpg'),
        new PropertyImageData('alaprajz.jpg', \App\Domain\Property\PropertyImageType::FLOOR_PLAN),
        new PropertyImageData('szoba2-1.jpg'),
        new PropertyImageData('szoba-2.jpg'),
        new PropertyImageData('szoba-4.jpg'),
        new PropertyImageData('felszoba.jpg'),
        new PropertyImageData('konyha.jpg'),
        new PropertyImageData('furdo-1.jpg'),
        new PropertyImageData('kozlekedo-1.jpg'),
        new PropertyImageData('lepcsohaz-2.jpg'),
    ]
);

/*return [
    'title' => 'Egyetem Győrben? Lehet, hogy ez jobb döntés, mint évekig albérletet fizetni.',
    'price' => 43900000,
    'location' => 'Győr, Nádorváros',
    'street' => 'Szabolcska utca',
    'features' => [
        ['label' => 'alapterület', 'value' => '43 m<sup>2</sup>'],
        ['label' => 'szobaszám', 'value' => '1+1'],
        ['label' => 'emelet', 'value' => '2'],
        ['label' => 'épület szerkezete', 'value' => 'Tégla'],
    ],
    'quote' => 'Ideális első lakás, amely később is jó befektetés maradhat. Kedvező fenntartás és remek elhelyezkedés Győr egyik legnépszerűbb városrészében.',
    'highlights' => [
        ['icon' => 'air-vent', 'value' => 'Légkondícionáló'],
        ['icon' => 'piggy-bank', 'value' => 'Kedvező fenntartás'],
        ['icon' => 'bed', 'value' => 'Két külön használható szoba'],
        ['icon' => 'thermometer', 'value' => 'Műanyag nyílászárók'],
        ['icon' => 'shelving-unit', 'value' => 'Saját tároló'],
    ],
    'mainImage' => 'szoba-3.jpg',
    'gallery' => [
        'szoba-3.jpg',
        'alaprajz.jpg',
        'szoba2-1.jpg',
        'szoba-2.jpg',
        'szoba-4.jpg',
        'felszoba.jpg',
        'konyha.jpg',
        'furdo-1.jpg',
        'kozlekedo-1.jpg',
        'lepcsohaz-2.jpg',
    ],
    'description' => <<<DESCRIPTION
<p>Győr egyik legkedveltebb városrészében, Nádorvárosban, a <strong>Szabolcska utcában</strong> kínálok megvételre egy <strong>43 m²-es, 1+1 szobás, 2. emeleti lakást</strong>, amely kiváló választás lehet egyetemistáknak vagy első saját otthont keresőknek.</p>

<p>Ha gyermeked most kezdi az egyetemet Győrben, érdemes hosszabb távon gondolkodni. Az albérletre kifizetett havi összegek soha nem térnek vissza, míg egy saját lakás nemcsak otthont biztosít az egyetemi évek alatt, hanem később is értékes befektetés maradhat.</p>

<p>A lakás kialakítása lehetővé teszi, hogy akár két hallgató is használja, így a lakhatási költségek könnyen megoszthatók. A kisebb alapterület kedvező fenntartási költségeket jelent, miközben a külön félszoba a mindennapokban is praktikus megoldást kínál.</p>

<p>Az ingatlan az elmúlt időszakban több felújításon is átesett: megújult az elektromos hálózat, új burkolatok és friss festés készült, a nyári komfortot klímaberendezés biztosítja. A távfűtés egyedi mérővel működik, így a rezsi jól tervezhető. A fürdőszoba felújítása már az új tulajdonosra vár, így azt saját ízlése szerint alakíthatja ki.</p>

<p>A Szabolcska utca csendes, kedvelt része Nádorvárosnak, ahonnan a belváros néhány perc sétával elérhető. A közelben parkok, bevásárlási lehetőségek, buszmegállók és minden fontos szolgáltatás megtalálható, így az egyetemi évek alatt is kényelmes választás.</p>

<p>Az ingatlan jelenleg bérlő által lakott, ezért a birtokbaadás várhatóan <strong>90 napon belül</strong>, illetve megegyezés szerint történhet. Ha a tanulmányok csak ősszel kezdődnek, ez sok esetben még kényelmes időzítést is jelenthet.</p>

<p>Ha olyan lakást keresel, amely az egyetemi évek alatt otthonként szolgálhat, később pedig akár kiadásra vagy hosszú távú befektetésként is jól hasznosítható, ezt az ingatlant érdemes személyesen is megnézni.</p>

<h2>Főbb jellemzők:</h2>

<ul>
    <li>43 m² alapterület</li>
    <li>1+1 szoba</li>
    <li>2. emelet</li>
    <li>klímaberendezés</li>
    <li>felújított elektromos hálózat</li>
    <li>távfűtés egyedi méréssel</li>
    <li>részben felújított állapot</li>
    <li>csendes, kedvelt nádorvárosi környezet</li>
    <li>birtokbaadás 90 napon belül / megegyezés szerint</li>
    <li>Győr, Nádorváros – Szabolcska utca</li>
</ul>
DESCRIPTION,
    'details' => [
        [
            'icon' => 'house',
            'title' => 'Alapadatok',
            'items' => [
                ['label' => 'Kategória', 'value' => 'Használt'],
                ['label' => 'Épület szerkezete', 'value' => 'Tégla'],
                ['label' => 'Építés éve', 'value' => '1970'],
                ['label' => 'Ingatlan állapot', 'value' => 'Jó'],
                ['label' => 'Épület állapota kívül', 'value' => 'Jó'],
                ['label' => 'Kilátás', 'value' => 'Udvari'],
            ]
        ],
        [
            'icon' => 'ruler',
            'title' => 'Méretek',
            'items' => [
                ['label' => 'Alapterület', 'value' => '43 m<sup>2</sup>'],
                ['label' => 'Belmagasság (m)', 'value' => '2.7 m'],
                ['label' => 'Emeletek száma az épületben', 'value' => '4'],
                ['label' => 'Lakások száma az adott emeleten', 'value' => '4'],
            ]
        ],
        [
            'icon' => 'bed',
            'title' => 'Helyiségek',
            'items' => [
                ['label' => 'Egész szobák száma', 'value' => '1'],
                ['label' => 'Félszobák száma', 'value' => '1'],
            ]
        ],
        [
            'icon' => 'thermometer',
            'title' => 'Komfort',
            'items' => [
                ['label' => 'Komfortfokozat', 'value' => 'Összkomfort'],
                ['label' => 'Fűtés', 'value' => 'Távfűtés egyedi mérővel'],
                ['label' => 'Hőleadás fajtája', 'value' => 'Radiátoros fűtés, Légkondicionáló'],
                ['label' => 'Nappali tájolása', 'value' => 'Nyugati'],
                ['label' => 'Fényviszony', 'value' => 'Napfényes'],
                ['label' => 'Légkondicionáló', 'value' => 'igen'],
                ['label' => 'Redőny', 'value' => 'igen'],
            ]
        ],
        [
            'icon' => 'info',
            'title' => 'Egyéb',
            'items' => [
                ['label' => 'Lépcsőház típusa', 'value' => 'Zárt'],
                ['label' => 'Közös költség', 'value' => '10 300 Ft'],
                ['label' => 'Parkolás', 'value' => 'Közterületen ingyenes'],
                ['label' => 'Bútorozott', 'value' => 'Bútorozatlan'],
                ['label' => 'Beépített konyhabútor', 'value' => 'igen'],
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