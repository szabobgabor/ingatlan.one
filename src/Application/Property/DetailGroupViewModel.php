<?php

declare(strict_types=1);

namespace App\Application\Property;

use App\Application\Common\LabelValueViewModel;

class DetailGroupViewModel {

    /**
     * @param LabelValueViewModel[] $items
     */
    public function __construct(
        public readonly string $icon,
        public readonly string $title,
        public readonly array $items = [],
    )
    {}
}