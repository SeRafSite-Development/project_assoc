<?php 

$load = require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing;
use Symfony\Component\HttpKernel;;

$request = Request::createFromGlobals();
$routes = include __DIR__.'/../src/routes.php';

$context = new Routing\RequestContext();
$matcher = new Routing\Matcher\UrlMatcher($routes, $context);
$resolver = new HttpKernel\Controller\ControllerResolver();

$framework = new Litton\Framework($matcher, $resolver);
$response = $framework->handler($request);

$response->send();