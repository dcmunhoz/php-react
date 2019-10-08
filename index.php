<?php

require __DIR__ . "/vendor/autoload.php";

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new Slim\App();

$app->get('/' , function(Request $req, Response $res, $args){

    require __DIR__ . '/build/index.php';

});

$app->run();