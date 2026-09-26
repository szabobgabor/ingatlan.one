<?php

declare(strict_types=1);

namespace App\Application\Image;

use App\Framework\Path;

class ImageFactory
{
    public function __construct(
        private readonly Path $path,
    )
    {
    }

    public function create(string $src, string $alt = ''): ImageViewModel
    {
        $filePath = $this->path->getPublicPath($src);
        $imageSize = getimagesize($filePath);
        return new ImageViewModel($src, $alt, $imageSize[0], $imageSize[1]);
    }
}