<?php
/**
 * This file bootstraps/creates you application. Normally there is no need to change this file, but if you want to
 * inject own/other classes this is would be a good place to start.
 */
require_once __DIR__ . '/../vendor/autoload.php';

try {
    // include config files:
    $config = require_once __DIR__ . '/../config/config.php';
    $routes = require_once __DIR__ . '/../routes/default.php';

    // init dependencies:
    $request = new \Bloatless\Endocore\Http\Request($_GET, $_POST, $_SERVER);
    $router = new \Bloatless\Endocore\Components\Router\Router($routes);
    $logger = new \Bloatless\Endocore\Components\Logger\FileLogger($config['logger']);
    $exceptionHandler = new \Bloatless\Endocore\Exception\ExceptionHandler($config, $logger, $request);

    // create application:
    $app = new \Bloatless\Endocore\Application(
        $config,
        $request,
        $router,
        $logger,
        $exceptionHandler
    );

    return $app;
} catch (\Bloatless\Endocore\Exception\Application\EndocoreException $e) {
    exit('Error: ' . $e->getMessage());
}
