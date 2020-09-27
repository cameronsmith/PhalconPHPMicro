<?php

use CameronSmith\PhalconPHPMicro\Controllers\UsersController;
use CameronSmith\PhalconPHPMicro\Helpers\HTTPCodes;
use Phalcon\Mvc\Micro\Collection;

return function ($application) {
    $application->get(
        '/',
        function () {
            return 'Hello Micro Application!';
        }
    );

    $users = new Collection();
    $users
        ->setHandler(UsersController::class)
        ->setLazy(true)
        ->setPrefix('/users')
        ->get('/', 'index')
        ->post('/', 'create');
    $application->mount($users);

    $application->notFound(
        function () use ($application) {
            $application
                ->response
                ->setStatusCode(HTTPCodes::HTTP_NOT_FOUND)
                ->sendHeaders()
                ->send();
        }
    );

    return $application;
};
