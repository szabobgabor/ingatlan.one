<?php

declare(strict_types=1);

namespace App\Framework\Kernel;

use App\Component\Action\HandlerMetadata;
use App\Framework\View;
use App\Middleware\Enum\ResponseFormat;
use App\Presentation\Article\ArticleController;
use App\Presentation\Calculator\CalculatorController;
use App\Presentation\Home\HomeController;
use App\Presentation\Layout\Main;
use App\Presentation\Property\PropertyController;
use Nyholm\Psr7\Response;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class HttpExecutor implements RequestHandlerInterface {
    public function __construct(
        private readonly ContainerInterface $container
    )
    {}

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $response = new Response(200);
        /* @ var HandlerMetadata $handlerMetadata */
        /*$handlerMetadata = $request->getAttribute(HandlerMetadata::REQUEST_ATTRIBUTE);

        $service = $this->container->get($handlerMetadata->getClass());
        $method = $handlerMetadata->getMethod();
        $result = $service->$method(...$handlerMetadata->getArguments());

        $responseFormat = $request->getAttribute(ResponseFormat::REQUEST_ATTRIBUTE);
        if (! ($responseFormat instanceof ResponseFormat)) {
            throw new \RuntimeException('Response format not found');
        }

        $response->getBody()->write($responseFormat->normalize($result));*/
        $mainLayout = $this->container->get(Main::class);

        $path = trim($request->getUri()->getPath(),'/');
        if (preg_match('/^M\d{6}$/', $path)) {
            $property = $this->container->get(PropertyController::class);
            $contents = $property($path);
        } elseif ($path === 'calculator') {
            $calculator = $this->container->get(CalculatorController::class);
            $contents = $calculator();
        } elseif (preg_match('/^[a-z-]+$/', $path)) {
            $article = $this->container->get(ArticleController::class);
            $contents = $article($path);
        } elseif ($path === '') {
            $home = $this->container->get(HomeController::class);
            $contents = $home();
        } else {
            $contents = '';
        }

        $response->getBody()->write($mainLayout($contents));
        return $response;
    }
}