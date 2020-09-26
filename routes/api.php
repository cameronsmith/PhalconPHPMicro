<?php

return function($application) {
    $application->get(
        '/',
        function () {
            echo 'Hello Micro Application!';
        }
    );

    return $application;
};