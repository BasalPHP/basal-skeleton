<?php

/** @var \League\Route\RouteCollection $route */
$route = $container->get(\League\Route\RouteCollection::class);

$route->get('/', $container->get(\Infrastructure\API\Action\ExampleAction::class));
