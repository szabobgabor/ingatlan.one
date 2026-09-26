<?php

declare(strict_types=1);

namespace App\Application\PropertyList;

use App\Framework\Path;
use RuntimeException;

class GetRelatedProperties {
    public function __construct(
        private readonly RelatedPropertyQuery $propertyQuery,
        private readonly RelatedPropertyFactory $propertyFactory,
        private readonly Path $path,
    )
    {
    }

    /**
     * @return RelatedPropertyViewModel[]
     */
    public function __invoke(string $scenario, ?string $currentId = null): array
    {
        switch ($scenario) {
            case 'panel':
                $propertyIds = [/*'M332390', */'M334090', /*'M332485', 'M335451', 'M321800'*/];
                break;
            default:
                $propertyIds = [];
        }

        $propertyModels = $this->propertyQuery->getList($propertyIds);
        $properties = [];
        foreach($propertyModels as $model) {
            if ($model->id === $currentId) {
                continue;
            }
            $properties[] = $this->propertyFactory->createFromModel($model);
        }
        return $properties;
    }
}