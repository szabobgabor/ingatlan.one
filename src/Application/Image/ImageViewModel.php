<?php

declare(strict_types=1);

namespace App\Application\Image;

use App\Framework\Path;

readonly class ImageViewModel{
    public function __construct(
        public string $src,
        public string $alt,
        public int $width,
        public int $height
    )
    {
    }

    public static function createFromSrc(string $src, Path $path, string $alt = ''): self
    {
        $filePath = $path->getPublicPath($src);
        $imageSize = getimagesize($filePath);
        return new self($src, $alt, $imageSize[0], $imageSize[1]);
    }
}