<?php

declare(strict_types=1);

namespace App\Application\Property;

use App\Application\Common\LabelValueViewModel;

class DetailGroupViewModel {
    public function __construct(
        public readonly string $icon,
        public readonly string $title,
        /** @var LabelValueViewModel[] */
        private array $items = [],
    )
    {}

    public function addItem(LabelValueViewModel $item): self
    {
        $this->items[] = $item;
        return $this;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public static function createFromArray(array $data): self
    {
        $group = new self($data['icon'], $data['title']);
        foreach ($data['items'] as $item) {
            $group->addItem(new LabelValueViewModel($item['label'], $item['value']));
        }
        return $group;
    }
}