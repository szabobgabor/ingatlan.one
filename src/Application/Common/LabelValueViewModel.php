<?php

declare(strict_types=1);

namespace App\Application\Common;

readonly class LabelValueViewModel {
    public function __construct(
        public string $label,
        public string $value,
    )
    {}
}