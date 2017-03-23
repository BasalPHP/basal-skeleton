<?php

$basal->addMiddleware($container->get(\Basal\Middleware\LeagueRoute\LeagueRouteMiddleware::class));
$basal->addMiddleware(new \Infrastructure\Response\ResponseMiddleware());
