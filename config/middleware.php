<?php

if (getenv('ENVIRONMENT') === 'dev') {
    $basal->addMiddleware(new \Middlewares\Whoops());
}

$basal->addMiddleware($container->get(\Basal\Middleware\LeagueRoute\LeagueRouteMiddleware::class));
$basal->addMiddleware(new \Infrastructure\Response\ResponseMiddleware());
