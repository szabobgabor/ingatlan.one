<?php

declare(strict_types=1);

namespace App\Application\Property;

use App\Application\Common\IconValueViewModel;
use App\Application\Common\LabelValueViewModel;
use App\Application\Common\MapViewModel;
use App\Application\Image\ImageViewModel;
use App\Framework\Path;

class PropertyViewModel {
    public function __construct(
        public readonly string $id,
        public readonly string $title,
        public readonly int $price,
        public readonly string $location,
        public readonly string $quote,
        public readonly string $description,
        public readonly ImageViewModel $mainImage,
        public readonly MapViewModel $map,
        /** @var LabelValueViewModel[] */
        private array $features = [],
        /** @var IconValueViewModel[] */
        private array $highlights = [],
        /** @var ImageViewModel[] */
        private array $gallery = [],
        /** @var DetailGroupViewModel[] */
        private array $details = [],
    )
    {}

    /**
     * @return ImageViewModel[]
     */
    public function getGallery(): array
    {
        return $this->gallery;
    }

    public function addGalleryImage(ImageViewModel $image): self
    {
        $this->gallery[] = $image;
        return $this;
    }

    /**
     * @return LabelValueViewModel[]
     */
    public function getFeatures(): array
    {
        return $this->features;
    }

    public function addFeature(LabelValueViewModel $feature): self
    {
        $this->features[] = $feature;
        return $this;
    }

    public function getHighlights(): array
    {
        return $this->highlights;
    }

    public function addHighlight(IconValueViewModel $highlight): self
    {
        $this->highlights[] = $highlight;
        return $this;
    }

    public function getDetails(): array
    {
        return $this->details;
    }

    public function addDetailGroup(DetailGroupViewModel $detailGroup): self
    {
        $this->details[] = $detailGroup;
        return $this;
    }

    public static function createFromArray(array $data, Path $path): self
    {
        $propertyImagesRootPath = 'images/property/'.$data['id'].'/';
        $property = new self(
            $data['id'],
            $data['title'],
            $data['price'],
            $data['location'],
            $data['quote'],
            $data['description'],
            ImageViewModel::createFromSrc($propertyImagesRootPath.$data['mainImage'], $path),
            MapViewModel::createFromArray($data['map']),
        );

        foreach ($data['features'] as $feature) {
            $property->addFeature(new LabelValueViewModel($feature['label'], $feature['value']));
        }
        foreach ($data['highlights'] as $highlight) {
            $property->addHighlight(new IconValueViewModel($highlight['icon'], $highlight['value']));
        }

        foreach ($data['gallery'] as $image) {
            $property->addGalleryImage(ImageViewModel::createFromSrc($propertyImagesRootPath.$image, $path));
        }

        foreach ($data['details'] as $detailGroup) {
            $property->addDetailGroup(DetailGroupViewModel::createFromArray($detailGroup));
        }

        return $property;
    }
}