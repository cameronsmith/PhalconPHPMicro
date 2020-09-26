<?php

use CameronSmith\PhalconPHPMicro\Helpers\Path;
use Phalcon\Mvc\Micro;

/**
 * Register Application.
 */
$application = new Micro();

/**
 * Attach Routes.
 */
$routes = require_once (Path::getRootPath() . '/routes/api.php');
$application = $routes($application);

return $application;