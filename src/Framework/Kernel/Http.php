<?php

declare(strict_types=1);

namespace App\Framework\Kernel;

use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;
use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7Server\ServerRequestCreator;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class Http implements RequestHandlerInterface {

    protected RequestHandlerInterface $handler;

    public function __construct(
        private readonly ContainerInterface $container
    )
    {
        $this->handler = new HttpExecutor($this->container);
        /*$this
            ->addMiddleWare($this->container->get(ArgumentsResolverMiddleware::class))
            ->addMiddleWare($this->container->get(ActionRouterMiddleware::class))
            ->addMiddleWare($this->container->get(BodyParserMiddleware::class))
            ->addMiddleWare($this->container->get(ErrorHandlerMiddleware::class))
            ->addMiddleWare($this->container->get(ExceptionHandlerMiddleware::class))
            ->addMiddleWare($this->container->get(JsonMiddleware::class))
            ->addMiddleWare($this->container->get(CorsMiddleware::class));*/
    }

    public function addMiddleWare(MiddlewareInterface $middleware): self
    {
        $next = $this->handler;
        $this->handler = new class ($middleware, $next) implements RequestHandlerInterface {
            private MiddlewareInterface $middleware;

            private RequestHandlerInterface $next;

            public function __construct(MiddlewareInterface $middleware, RequestHandlerInterface $next)
            {
                $this->middleware = $middleware;
                $this->next = $next;
            }

            public function handle(ServerRequestInterface $request): ResponseInterface
            {
                return $this->middleware->process($request, $this->next);
            }
        };

        return $this;
    }

    public function run(): void
    {
        $psr17Factory = new Psr17Factory();
        $creator = new ServerRequestCreator($psr17Factory, $psr17Factory, $psr17Factory, $psr17Factory);

        $serverRequest = $creator->fromGlobals();
        $response = $this->handle($serverRequest);
        (new SapiEmitter())->emit($response);
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return $this->handler->handle($request);
    }
}