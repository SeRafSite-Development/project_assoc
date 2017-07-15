<?php 

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('home', 
	new Routing\Route('/{index}', array(
		'_controller' => 'Main\\Controller\\HomeController::indexAction',
		'index' => 'index',
		), array(
		'index' => 'index|index.html',
	))
);

$routes->add('about', 
	new Routing\Route('/o-nas', array(
		'_controller' => 'Main\\Controller\\AboutController::indexAction',
		))
);

$routes->add('actions', 
	new Routing\Route('/o-nas/dzialania', array(
		'_controller' => 'Main\\Controller\\ActionsController::indexAction',
		))
);

$routes->add('statute', 
	new Routing\Route('/o-nas/statut', array(
		'_controller' => 'Main\\Controller\\StatuteController::indexAction',
		))
);

$routes->add('news', 
	new Routing\Route('/aktualnosci', array(
		'_controller' => 'Main\\Controller\\NewsController::indexAction',
		))
);

$routes->add('supportInfo', 
	new Routing\Route('/mozesz-pomoc', array(
		'_controller' => 'Main\\Controller\\SupportInfoController::indexAction',
		))
);

$routes->add('partners', 
	new Routing\Route('/partnerzy', array(
		'_controller' => 'Main\\Controller\\PartnersController::indexAction',
		))
);

$routes->add('contact', 
	new Routing\Route('/kontakt', array(
		'_controller' => 'Main\\Controller\\ContactController::indexAction',
		))
);

return $routes;