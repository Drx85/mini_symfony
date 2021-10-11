<?php

use Framework\Simplex;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\HttpCache\HttpCache;
use Symfony\Component\HttpKernel\HttpCache\Store;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

require __DIR__ . '/../vendor/autoload.php';

$request = Request::createFromGlobals();

$routes = require __DIR__ . '/../src/routes.php';
$context = new RequestContext();
$dispatcher = new EventDispatcher();
$urlMatcher = new UrlMatcher($routes, $context);
$controllerResolver = new ControllerResolver();
$argumentResolver = new ArgumentResolver();

$framework = new Simplex($dispatcher, $urlMatcher, $controllerResolver, $argumentResolver);
$framework = new HttpCache($framework, new Store(__DIR__.'/../cache'));
$response = $framework->handle($request);
$response->send();