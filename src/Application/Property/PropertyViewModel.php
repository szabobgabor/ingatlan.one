<?php

declare(strict_types=1);

namespace App\Application\Property;

use App\Application\Image\ImageViewModel;

class PropertyViewModel {
    public function __construct(
        //public readonly ImageViewModel $mainImage,
        /** @var ImageViewModel[] */
        private array $gallery = []
    )
    {
    }

    /**
     * @return ImageViewModel[]
     */
    public function getGallery(): array
    {
        return $this->gallery;
    }

    public function addGalleryImage(ImageViewModel $image): void
    {
        $this->gallery[] = $image;
    }
}