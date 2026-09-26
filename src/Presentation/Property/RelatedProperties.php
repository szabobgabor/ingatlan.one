<?php

declare(strict_types=1);

namespace App\Presentation\Property;

use App\Application\PropertyList\GetRelatedProperties;
use App\Framework\View;

class RelatedProperties {
    public function __construct(
        private readonly View $view,
        private readonly GetRelatedProperties $getRelatedProperties,
    )
    {
    }

    public function __invoke(string $scenario, ?string $currentId = null): string
    {
        return $this->view->render(__DIR__, 'related-properties', [
            'properties' => ($this->getRelatedProperties)($scenario, $currentId),
        ]);
    }
}