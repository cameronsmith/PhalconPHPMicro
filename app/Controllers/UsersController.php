<?php namespace CameronSmith\PhalconPHPMicro\Controllers;

use CameronSmith\PhalconPHPMicro\Helpers\HTTPCodes;
use Phalcon\Http\ResponseInterface;
use CameronSmith\PhalconPHPMicro\Validators\Users\Create;

/**
 * Class UsersController
 *
 * @package CameronSmith\PhalconPHPMicro\Controllers
 */
class UsersController extends Controller
{
    /**
     * @route GET /users/
     * @return ResponseInterface
     */
    public function index()
    {
        $this->response->setJsonContent([
            'users' => [

            ],
        ]);

        return $this->response;
    }

    /**
     * @route POST /users/
     * @return ResponseInterface
     */
    public function create()
    {
        $request_json = $this->request->getJsonRawBody(true);
        $messages = $this->getValidationMessages(new Create(), $request_json);
        if (!empty($messages)) {
            $this->response->setStatusCode(HTTPCodes::HTTP_BAD_REQUEST);
            $this->response->setJsonContent(['messages' => $messages]);
            return $this->response;
        }
        
        $this->response->setStatusCode(HTTPCodes::HTTP_CREATED);
        return $this->response;
    }
}
