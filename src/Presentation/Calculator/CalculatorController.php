<?php

declare(strict_types=1);

namespace App\Presentation\Calculator;

use App\Framework\View;
use App\Presentation\Contact\ContactSidebar;

class CalculatorController {
    public function __construct(
        private View $view,
        private ContactSidebar $contactSidebar
    )
    {}

    public function __invoke(): string
    {
        return $this->view->render(__DIR__, 'calculator', [
            'contact' => ($this->contactSidebar)(),
        ]);
    }
}