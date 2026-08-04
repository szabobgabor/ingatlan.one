<?php

declare(strict_types=1);

namespace App\Presentation\Layout;

use App\Framework\View;

class Main
{
    public function __construct(
        private View $view
    )
    {}

    public function __invoke(string $contents): string
    {
        return $this->view->render(__DIR__, 'main', ['contents' => $contents]);
    }
}