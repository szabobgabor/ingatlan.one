<?php

declare(strict_types=1);

namespace App\Application\Property;

use App\Application\Common\IconValueViewModel;
use App\Application\Common\LabelValueViewModel;
use App\Application\Common\MapViewModel;
use App\Application\Image\ImageViewModel;
use App\Framework\Path;

readonly class PropertyViewModel
{
    /**
     * @param LabelValueViewModel[] $features
     * @param IconValueViewModel[] $highlights
     * @param ImageViewModel[] $gallery
     * @param DetailGroupViewModel[] $details
     */
    public function __construct(
        public string $id,
        public string $title,
        public string $price,
        public string $location,
        public string $quote,
        public string $description,
        public ImageViewModel $mainImage,
        public MapViewModel $map,
        public array $features = [],
        public array $highlights = [],
        public array $gallery = [],
        public array $details = [],
    ) {}
}