<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->registerNamespaces([
    'Codesquad\Models' => APP_PATH . '/common/models/',
    'Codesquad'        => APP_PATH . '/common/library/',
]);

/**
 * Register module classes
 */
$loader->registerClasses([
    'Codesquad\Modules\Frontend\Module' => APP_PATH . '/modules/frontend/Module.php',
    'Codesquad\Modules\Cli\Module'      => APP_PATH . '/modules/cli/Module.php'
]);

$loader->register();
