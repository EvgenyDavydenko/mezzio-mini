<?php

declare(strict_types=1);

use Laminas\ServiceManager\AbstractFactory\ReflectionBasedAbstractFactory;
use Laminas\ServiceManager\ServiceManager;
use MiniMezzio\AppFactory;
use Mezzio\Router\FastRouteRouter;
use Mezzio\Router\Middleware\DispatchMiddleware;
use Mezzio\Router\Middleware\RouteMiddleware;
use Mezzio\Router\RouterInterface;

require __DIR__ . '/../vendor/autoload.php';

$container = new ServiceManager();

$container->addAbstractFactory(ReflectionBasedAbstractFactory::class);
$container->setFactory(RouterInterface::class, static function () {
    return new FastRouteRouter();
});

$app = AppFactory::create($container, $container->get(RouterInterface::class));

$app->pipe(RouteMiddleware::class);
$app->pipe(DispatchMiddleware::class);

$app->get('/', \MiniMezzio\HelloHandler::class);

$app->run();