<?php

declare(strict_types=1);

namespace App\Domain\Property;

use InvalidArgumentException;

class PropertyAttributeData {
    public function __construct(
        public readonly PropertyAttribute $attribute,
        public readonly mixed $value,
    )
    {
        if (!$this->attribute->type()->isValueValid($this->value)) {
            throw new InvalidArgumentException(sprintf(
                'Invalid value type for attribute "%s": %s',
                $this->attribute->name,
                gettype($this->value),
            ));
        }
    }
}