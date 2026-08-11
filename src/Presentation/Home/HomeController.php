<?php

declare(strict_types=1);

namespace App\Presentation\Home;

use App\Framework\View;
use App\Presentation\Contact\ContactSidebar;

class HomeController {
    public function __construct(
        private View $view,
        private ContactSidebar $contactSidebar
    )
    {}

    public function __invoke(): string
    {
        return $this->view->render(__DIR__, 'home', [
            'contact' => ($this->contactSidebar)(),
        ]);
    }
}