<?php

declare(strict_types=1);

namespace App\Framework;

class View {
    public function render(string $templatesRoot, string $template, array $data = []): string
    {
        extract($data);

        ob_start();

        require $templatesRoot.'/'.$template.'.tpl.php';

        return ob_get_clean();
    }
}