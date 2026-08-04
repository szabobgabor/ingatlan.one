<?php

declare(strict_types=1);

namespace App\Presentation\Property;

use App\Application\Property\GetProperty;
use App\Framework\View;
use App\Presentation\Contact\ContactSidebar;

class PropertyController
{
    public function __construct(
        protected View $view,
        protected GetProperty $getProperty,
        private ContactSidebar $contactSidebar
    )
    {}
    public function __invoke(string $propertyId): string
    {
        return $this->view->render(__DIR__, 'property', [
            'property' => ($this->getProperty)($propertyId),
            'contact' => ($this->contactSidebar)(),
        ]);
    }
}