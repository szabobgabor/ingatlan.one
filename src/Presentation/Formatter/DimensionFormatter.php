<?php

declare(strict_types=1);

namespace App\Presentation\Formatter;

class DimensionFormatter {
    public function area(int $area): string
    {
        return number_format($area, 0, ',', ' ').' m<sup>2</sup>';
    }

    public function height(float $height): string
    {
        return number_format($height, 1, ',', ' ').' m';
    }
}