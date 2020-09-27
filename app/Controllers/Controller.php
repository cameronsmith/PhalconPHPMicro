<?php namespace CameronSmith\PhalconPHPMicro\Controllers;

use Phalcon\Mvc\Controller as PhalconController;
use Phalcon\Validation\ValidationInterface;

/**
 * Class Controller
 *
 * @package CameronSmith\PhalconPHPMicro\Controllers
 */
class Controller extends PhalconController
{
    /**
     * @param ValidationInterface $validator
     * @param array $request_json
     * @return array
     */
    protected function getValidationMessages(ValidationInterface $validator, array $request_json = [])
    {
        $messages = $validator->validate($request_json);
        if (empty($messages)) {
            return [];
        }

        $response = [];
        foreach($messages as $message) {
            $response[] = $message->getMessage();
        }

        return $response;
    }
}
