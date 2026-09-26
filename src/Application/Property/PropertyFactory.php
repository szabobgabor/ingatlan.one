<?php

declare(strict_types=1);

namespace App\Application\Property;

use App\Application\Common\IconValueViewModel;
use App\Application\Common\LabelValueViewModel;
use App\Application\Common\MapViewModel;
use App\Application\Image\ImageFactory;
use App\Application\Image\ImageViewModel;
use App\Domain\LabeledEnum;
use App\Domain\Location\MapData;
use App\Domain\Property\PropertyAttribute;
use App\Domain\Property\PropertyData;
use App\Presentation\Formatter\DimensionFormatter;
use App\Presentation\Formatter\PriceFormatter;
use App\Shared\Str;
use PhpParser\Node\Stmt\Label;

class PropertyFactory
{
    const DEFAULT_PROPERTY_IMAGE = 'images/defaults/property.jpg';

    public function __construct(
        private readonly ImageFactory                    $imageFactory,
        private readonly PropertyAttributeValueFormatter $paf,
        private readonly PriceFormatter                  $priceFormatter,
        private readonly DimensionFormatter              $dimensionFormatter,
    )
    {}

    public function createFromRawArray(array $data): PropertyViewModel
    {
        $propertyImagesRootPath = 'images/property/'.$data['id'].'/';
        $property = new PropertyViewModel(
            $data['id'],
            $data['title'],
            $data['price'],
            $data['location'],
            $data['quote'],
            $data['description'],
            $this->imageFactory->create($propertyImagesRootPath.$data['mainImage']),
            MapViewModel::createFromArray($data['map']),
        );

        foreach ($data['features'] as $feature) {
            $property->addFeature(new LabelValueViewModel($feature['label'], $feature['value']));
        }
        foreach ($data['highlights'] as $highlight) {
            $property->addHighlight(new IconValueViewModel($highlight['icon'], $highlight['value']));
        }

        foreach ($data['gallery'] as $image) {
            $property->addGalleryImage($this->imageFactory->create($propertyImagesRootPath.$image));
        }

        foreach ($data['details'] as $detailGroup) {
            $property->addDetailGroup(DetailGroupViewModel::createFromArray($detailGroup));
        }

        return $property;
    }

    public function createFromProperty(PropertyData $model): PropertyViewModel
    {
        $location = $model->location;

        $propertyImagesRootPath = 'images/property/'.$model->id.'/';
        $mainImageFile = $model->images[0]?->filename;

        $mainImagePublicPath = $mainImageFile ? $propertyImagesRootPath.$mainImageFile : self::DEFAULT_PROPERTY_IMAGE;

        $property = new PropertyViewModel(
            id: $model->id,
            title: $this->paf->format($model, PropertyAttribute::TITLE),
            price: $this->priceFormatter->format($model->price),
            location: Str::joinNonEmpty(', ', [$location->locality, $location->subLocality]),
            quote: $this->paf->format($model, PropertyAttribute::QUOTE),
            description: $model->description,
            mainImage: $this->imageFactory->create($mainImagePublicPath),
            map: MapViewModel::createFromMapData($model->location->map ?? $this->defaultMap()),
            features: $this->buildFeatures($model),
            highlights: $this->buildHighlights($model),
            gallery: $this->buildGallery($model),
            details: $this->buildDetails($model),
        );

        return $property;
    }

    /**
     * @return LabelValueViewModel[]
     */
    private function buildFeatures(PropertyData $property): array
    {
        $features = [];
        if ($property->area !== null) {
            $features[] = new LabelValueViewModel('alapterület', $this->dimensionFormatter->area($property->area));
        }
        if ($property->landArea !== null) {
            $features[] = new LabelValueViewModel('telekterület', $this->dimensionFormatter->area($property->landArea));
        }

        if ($property->rooms || $property->halfRooms) {
            $roomCount = [];
            if ($property->rooms) {
                $roomCount[] = $property->rooms;
            }
            if ($property->halfRooms) {
                $roomCount[] = $property->halfRooms;
            }
            $features[] = new LabelValueViewModel('szobaszám', implode('+', $roomCount));
        }

        if ($property->floor !== null) {
            $floor = $property->floor;
            $features[] = new LabelValueViewModel('szint', $floor instanceof LabeledEnum ? $floor->label() : $floor.'. emelet');;
        }

        if ($property->structure !== null) {
            $features[] = new LabelValueViewModel('épület szerkezete', $property->structure->label());
        }


        return $features;
    }

    /**
     * @return IconValueViewModel[]
     */
    private function buildHighlights(PropertyData $property): array
    {
        $highlights = [];

        /* @var array<string, string> $rawHighlights */
        $rawHighlights = $property->getAttributeValue(PropertyAttribute::HIGHLIGHT);
        foreach ($rawHighlights as list($icon, $value)) {
            $highlights[] = new IconValueViewModel($icon, $value);
        }

        return $highlights;
    }

    private function buildGallery(PropertyData $property): array
    {
        $propertyImagesRootPath = 'images/property/'.$property->id.'/';
        $gallery = [];
        foreach ($property->images as $image) {
            $gallery[] = $this->imageFactory->create($propertyImagesRootPath.$image->filename);
        }

        return $gallery;
    }

    /**
     * @return DetailGroupViewModel[]
     */
    private function buildDetails(PropertyData $property): array
    {
        $general = new DetailGroupViewModel(
            'house',
            'Alapadatok',
            array_filter([
                new LabelValueViewModel('Kategória', $property->marketType->label()),
                $property->structure !== null ? new LabelValueViewModel('Épület szerkezete', $property->structure->label()) : null,
                $property->yearBuilt !== null ? new LabelValueViewModel('Építés éve', (string) $property->yearBuilt) : null,
                $property->interiorCondition !== null ? new LabelValueViewModel('Épület belső állapota', $property->interiorCondition->label()) : null,
                $property->exteriorCondition !== null ? new LabelValueViewModel('Épület külső állapota', $property->exteriorCondition->label()) : null,
                ...$this->buildLabelValueViewModels($property, [PropertyAttribute::VIEW])
            ])
        );

        $dimensions = new DetailGroupViewModel(
            'ruler',
            'Méretek',
            array_filter([
                $property->area !== null ? new LabelValueViewModel('Alapterület', $this->dimensionFormatter->area($property->area)) : null,
                $property->landArea !== null ? new LabelValueViewModel('Telekterület', $this->dimensionFormatter->area($property->landArea)) : null,
                $property->ceilingHeight !== null ? new LabelValueViewModel('Belmagasság', $this->dimensionFormatter->height($property->ceilingHeight)) : null,
                ...$this->buildLabelValueViewModels($property, [PropertyAttribute::BUILDING_FLOOR_COUNT, PropertyAttribute::APARTMENTS_PER_FLOOR])
            ])
        );
        $roomDetails = new DetailGroupViewModel(
            'bed',
            'Helyiségek',
            array_filter([
                $property->rooms !== null ? new LabelValueViewModel('Egész szobák száma', (string) $property->rooms) : null,
                $property->halfRooms !== null ? new LabelValueViewModel('Félszobák száma', (string) $property->halfRooms) : null,
            ])
        );
        $comfort = new DetailGroupViewModel(
            'thermometer',
            'Komfort',
            $this->buildLabelValueViewModels($property, [
                PropertyAttribute::COMFORT_LEVEL,
                PropertyAttribute::HEATING,
                PropertyAttribute::HEAT_DISTRIBUTION,
                PropertyAttribute::LIVING_ROOM_ORIENTATION,
                PropertyAttribute::NATURAL_LIGHT,
                PropertyAttribute::AIR_CONDITIONING,
                PropertyAttribute::ROLLER_SHUTTER,
            ])
        );
        $other = new DetailGroupViewModel(
            'info',
            'Egyéb',
            $this->buildLabelValueViewModels($property, [
                PropertyAttribute::STAIRWELL_TYPE,
                PropertyAttribute::COMMON_COST,
                PropertyAttribute::PARKING,
                PropertyAttribute::FURNISHING,
                PropertyAttribute::BUILT_IN_KITCHEN,
            ])
        );



        return [$general, $dimensions, $roomDetails, $comfort, $other];
    }

    /**
     * @param PropertyAttribute[] $attributes
     * @return LabelValueViewModel[]
     */
    private function buildLabelValueViewModels(PropertyData $property, array $attributes): array
    {
        $result = [];
        foreach ($attributes as $attribute) {
            $attributeValue = $property->getAttributeValue($attribute);
            if ($attributeValue === null) {
                continue;
            }
            $result[] = new LabelValueViewModel($attribute->label(), $this->paf->format($property, $attribute));
        }
        return $result;
    }

    private function defaultMap(): MapData
    {
        // TODO:
        return new MapData(
            'default url',
            'default img src',
            'default img alt',
        );
    }
}