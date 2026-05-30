<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Factory\AppFactory;

require __DIR__. "/../vendor/autoload.php";

// Create app
$app = AppFactory::create();

// Home route
$app->get("/", function(Request $request, Response $response){
    $response->getBody()->write("Homepage is under construction...");
    return $response;
});

// Run app
$app->run();
