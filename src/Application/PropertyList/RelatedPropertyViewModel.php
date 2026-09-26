<?php

declare(strict_types=1);

namespace App\Application\PropertyList;

use App\Application\Image\ImageViewModel;
use App\Framework\Path;

class RelatedPropertyViewModel {
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly ImageViewModel $image,
    )
    {
    }
}