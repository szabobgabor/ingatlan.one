<?php

declare(strict_types=1);

namespace App\Application\PropertyList;

use App\Application\Image\ImageFactory;
use App\Domain\Property\PropertyData;
use App\Presentation\Formatter\PriceFormatter;
use App\Shared\Str;

class RelatedPropertyFactory {
    public function __construct(
        private readonly ImageFactory $imageFactory,
        private readonly PriceFormatter $priceFormatter,
    )
    {}

    public function createFromModel(PropertyData $model): RelatedPropertyViewModel
    {
        $location = $model->location;
        return new RelatedPropertyViewModel(
            $model->id,
            Str::joinNonEmpty(' - ', [
                Str::joinNonEmpty(', ', [$location->locality, $location->subLocality]),
                $location->street,
                $this->priceFormatter->formatMillion($model->price)
            ]),
            $this->imageFactory->create('images/property/M334090/szoba-2.jpg')
        );
    }
}