<?php

require __DIR__.'/../vendor/autoload.php';

use Basal\Basal;
use Basal\InteropServiceProvider\LeagueContainer\InteropServiceProviderContainer;
use Basal\MiddlewareDispatcher\Middleman\MiddlemanMiddlewareDispatcher;
use Basal\Middleware\LeagueRoute\LeagueRouteMiddleware;
use Basal\Middleware\LeagueRoute\Provider\LeagueRouteMiddlewareInteropServiceProvider;
use Basal\ResponseEmitter\Diactoros\DiactorosResponseEmitter;
use Http\Factory\Diactoros\ServerRequestFactory;
use League\Container\Container;
use League\Route\RouteCollection;

$container = new InteropServiceProviderContainer(new Container());

require __DIR__.'/../config/providers.php';
require __DIR__.'/../config/services.php';

$basal = new Basal(
    new MiddlemanMiddlewareDispatcher(),
    new DiactorosResponseEmitter(),
    new ServerRequestFactory()
);

require __DIR__.'/../config/middleware.php';
require __DIR__.'/../config/routes.php';

$basal->run();
