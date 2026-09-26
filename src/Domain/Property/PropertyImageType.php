<?php

declare(strict_types=1);

namespace App\Domain\Property;

enum PropertyImageType {
    case PHOTO;
    case FLOOR_PLAN;
}