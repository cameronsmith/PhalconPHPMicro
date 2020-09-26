<?php

use CameronSmith\PhalconPHPMicro\Helpers\Path;
use Phalcon\Http\Request;
use Phalcon\Http\ResponseInterface;

/**
 * Load autoloader.
 */
require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Set global path.
 */
Path::setRootPath(dirname(__DIR__));

/**
 * Bootstrap application.
 */
$application = require_once (Path::getRootPath() . '/bootstrap/app.php');

/**
 * Launch application.
 */
try {
    $request = new Request();
    $response = $application->handle($request->getURI());
    if ($response instanceof ResponseInterface) {
        $response->send();
        exit();
    }

    echo $response;
} catch (Exception $exception) {
    echo 'Exception: ' . $exception->getMessage();
}
