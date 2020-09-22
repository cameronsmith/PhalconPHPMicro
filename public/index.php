<?php

use Phalcon\Mvc\Micro;

$application = new Micro();

$application->get(
    '/',
    function () {
        echo 'Hello Micro Application!';
    }
);

$application->handle($_SERVER['REQUEST_URI']);