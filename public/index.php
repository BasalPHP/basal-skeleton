<?php

// disable native error reporting
error_reporting(null);
ini_set('display_errors', 0);

require __DIR__.'/../vendor/autoload.php';

use Basal\Basal;
use Basal\InteropServiceProvider\LeagueContainer\InteropServiceProviderContainer;
use Basal\MiddlewareDispatcher\Middleman\MiddlemanMiddlewareDispatcher;
use Basal\ResponseEmitter\Diactoros\DiactorosResponseEmitter;
use Dotenv\Dotenv;
use Http\Factory\Diactoros\ServerRequestFactory;
use League\Container\Container;

// setup environment
$dotenv = new Dotenv(__DIR__.'/..');
$dotenv->load();
$dotenv->required(['ENVIRONMENT']);

// setup container
$container = new InteropServiceProviderContainer(new Container());

require __DIR__.'/../config/providers.php';
require __DIR__.'/../config/services.php';

// setup basal
$basal = new Basal(
    new MiddlemanMiddlewareDispatcher(),
    new DiactorosResponseEmitter(),
    new ServerRequestFactory()
);

require __DIR__.'/../config/middleware.php';
require __DIR__.'/../config/routes.php';

$basal->run();
