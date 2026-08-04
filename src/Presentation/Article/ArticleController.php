<?php
declare(strict_types=1);

namespace App\Presentation\Article;

use App\Application\Article\GetArticle;
use App\Framework\View;
use App\Presentation\Contact\ContactSidebar;

class ArticleController {
    public function __construct(
        private GetArticle $getArticle,
        private View $view,
        private ContactSidebar $contactSidebar
    )
    {}

    public function __invoke(): string
    {
        return $this->view->render(__DIR__, 'article', [
            'article' => ($this->getArticle)(),
            'contact' => ($this->contactSidebar)(),
        ]);
    }
}