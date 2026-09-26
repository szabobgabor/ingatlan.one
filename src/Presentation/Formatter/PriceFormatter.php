<?php

declare(strict_types=1);

namespace App\Presentation\Formatter;

class PriceFormatter {

    public function format(int $price): string
    {
        return number_format($price, 0, ',', ' ') . ' Ft';
    }

    public function formatMillion(int $price): string
    {
        return number_format($price / 1_000_000, 1, ',', ' ') . ' MFt';
    }
}