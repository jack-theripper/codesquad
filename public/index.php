<?php

use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Application;

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH.'/app');

try
{
	/**
	 * The FactoryDefault Dependency Injector automatically registers the services that
	 * provide a full stack framework. These default services can be overidden with custom ones.
	 */
	$di = new FactoryDefault();
	
	/**
	 * Include general services
	 */
	require APP_PATH.'/config/services.php';
	
	/**
	 * Include web environment specific services
	 */
	require APP_PATH.'/config/services_web.php';
	
	/**
	 * Get config service for use in inline setup below
	 */
	$config = $di->getConfig();
	
	/**
	 * Handle the request
	 */
	$application = new Application($di);
	
	/**
	 * Register application modules
	 */
	$application->registerModules([
		'frontend' => [
			'className' => Codesquad\Modules\Frontend\Module::class
		]
	]);
	
	/**
	 * Include Autoloader
	 */
	include APP_PATH.'/config/loader.php';
	
	/**
	 * Include routes
	 */
	require APP_PATH.'/config/routes.php';
	
	$application->handle()->send();
}
catch (Exception $exception)
{
	throw $exception;
}