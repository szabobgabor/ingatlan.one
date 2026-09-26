<?php

declare(strict_types=1);

namespace App\Domain\Property;

use App\Domain\LabeledEnum;

enum PropertyHeating: string implements LabeledEnum
{
    case GAS_CIRCO = 'gas_circo';
    case GAS_CONVECTOR = 'gas_convector';
    case GAS_HERA = 'gas_hera';

    case DISTRICT_HEATING = 'district_heating';
    case DISTRICT_HEATING_WITH_INDIVIDUAL_METER =
    'district_heating_with_individual_meter';

    case ELECTRIC = 'electric';

    case CENTRAL_HEATING = 'central_heating';
    case CENTRAL_HEATING_WITH_INDIVIDUAL_METER =
    'central_heating_with_individual_meter';

    case GEOTHERMAL = 'geothermal';
    case GAS_AND_ALTERNATIVE = 'gas_and_alternative';

    case SOLID_FUEL_BOILER = 'solid_fuel_boiler';
    case STOVE = 'stove';
    case FAN_COIL = 'fan_coil';

    case HEAT_PUMP = 'heat_pump';
    case ELECTRIC_HEATING_PANEL = 'electric_heating_panel';
    case ELECTRIC_CIRCO = 'electric_circo';

    case SOLAR = 'solar';

    case OTHER = 'other';
    case NONE = 'none';

    public function label(): string
    {
        return match ($this) {
            self::GAS_CIRCO => 'Gáz - cirkó',
            self::GAS_CONVECTOR => 'Gáz - konvektor',
            self::GAS_HERA => 'Gáz - Héra',

            self::DISTRICT_HEATING => 'Távfűtés',
            self::DISTRICT_HEATING_WITH_INDIVIDUAL_METER => 'Távfűtés egyedi mérővel',

            self::ELECTRIC => 'Elektromos',

            self::CENTRAL_HEATING => 'Házközponti',
            self::CENTRAL_HEATING_WITH_INDIVIDUAL_METER => 'Házközponti egyedi mérővel',

            self::GEOTHERMAL => 'Geotermikus',
            self::GAS_AND_ALTERNATIVE => 'Gáz + alternatív',

            self::SOLID_FUEL_BOILER => 'Szilárd tüzelésű kazán',
            self::STOVE => 'Kályha',
            self::FAN_COIL => 'Fan coil',

            self::HEAT_PUMP => 'Hőszivattyú',
            self::ELECTRIC_HEATING_PANEL => 'Elektromos fűtőpanel',
            self::ELECTRIC_CIRCO => 'Elektromos cirkó',

            self::SOLAR => 'Napelem - napkollektor',

            self::OTHER => 'Egyéb',
            self::NONE => 'Nincs',
        };
    }
}