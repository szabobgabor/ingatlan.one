<?php

declare(strict_types=1);

namespace App\Presentation\Calculator;

use App\Framework\View;

class CalculatorController {
    public function __construct(
        private View $view
    )
    {}

    public function __invoke(): string
    {
        return $this->view->render(__DIR__, 'calculator');
    }
}