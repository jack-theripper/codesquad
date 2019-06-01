<?php

use Phalcon\Flash\Direct as Flash;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\Router;
use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\Session\Adapter\Files as SessionAdapter;

/**
 * Registering a router
 */
$di->setShared('router', function () use ($di, &$application) {
    $router = new Router\Annotations();
	$router->setDefaultModule('frontend');
	$router->removeExtraSlashes(true);
	
	/**
	 * Register routes from the module.
	 */
	foreach ($application->getModules() as $moduleName => $module)
	{
		if ( ! method_exists($module['className'], 'registerRoutes'))
		{
			continue;
		}
		
		$definition = new $module['className']($di);
		$definition->registerRoutes($router, $di);
		
		$di->setShared($module['className'], $definition); // We will not create an instance twice. Thanks Phalcon\Di
	}
	
    return $router;
});

/**
 * The URL component is used to generate all kinds of URLs in the application
 */
$di->setShared('url', function () {
    $config = $this->getConfig();

    $url = new UrlResolver();
    $url->setBaseUri($config->application->baseUri);

    return $url;
});

/**
 * Starts the session the first time some component requests the session service
 */
$di->setShared('session', function () {
    $session = new SessionAdapter();
    $session->start();

    return $session;
});

/**
 * Register the session flash service with the Twitter Bootstrap classes
 */
$di->set('flash', function () {
    return new Flash([
        'error'   => 'alert alert-danger',
        'success' => 'alert alert-success',
        'notice'  => 'alert alert-info',
        'warning' => 'alert alert-warning'
    ]);
});

/**
* Set the default namespace for dispatcher
*/
$di->setShared('dispatcher', function() {
    $dispatcher = new Dispatcher();
    $dispatcher->setDefaultNamespace('Codesquad\Modules\Frontend\Controllers');
    return $dispatcher;
});
