<?php

declare(strict_types=1);

namespace App\Application\Property;

use App\Application\Image\ImageViewModel;
use App\Framework\Path;

class GetProperty {
    public function __construct(
        private Path $path
    )
    {}
    public function __invoke(): PropertyViewModel
    {
        $property = new PropertyViewModel();
        
        $images = [
            '/images/property/malomsok/01-amerikai-konyhas-nappali.jpg',
            '/images/property/malomsok/02-amerikai-konyhas-nappali.jpg',
            '/images/property/malomsok/03-amerikai-konyhas-nappali.jpg',
            '/images/property/malomsok/04-amerikai-konyhas-nappali.jpg',
            '/images/property/malomsok/05-szoba-1.jpg',
            '/images/property/malomsok/06-szoba-1.jpg',
            '/images/property/malomsok/07-szoba-2.jpg',
            '/images/property/malomsok/08-szoba-2.jpg',
            '/images/property/malomsok/09-furdo.jpg',
            '/images/property/malomsok/10-tarolo.jpg',
            '/images/property/malomsok/11-udvar.jpg',
            '/images/property/malomsok/12-udvar.jpg',
            '/images/property/malomsok/13-udvar.jpg',
        ];
        foreach($images as $imageSrc) {
            $property->addGalleryImage(ImageViewModel::createFromSrc($imageSrc, $this->path));
        }

        
        return $property;
    }
}