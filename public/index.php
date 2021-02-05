<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

// Instantiate App

$app = AppFactory::create();
require_once '../src/config/db.php';

// Rutas

require '../src/rutas/rutas.php';



// Add error middleware
$app->addErrorMiddleware(true, true, true);
$app->setBasePath('/api-rest/public');
$app->run();
