<?php

declare(strict_types=1);

namespace App\Presentation\Contact;

use App\Framework\View;

class ContactSidebar
{
    public function __construct(
        private View $view
    )
    {}

    public function __invoke(): string
    {
        return $this->view->render(__DIR__, 'contact-sidebar');
    }
}