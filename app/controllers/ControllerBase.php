<?php
declare(strict_types=1);

namespace App\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\View;
use App\Helpers\JsonResponseHelper;

class ControllerBase extends Controller
{
    public $a_jsonResponse = [
        JsonResponseHelper::IDX_JSON_RESPONSE_MSG => JsonResponseHelper::MSG_DEFAULT_SUCCESS
    ];

    // Implement common logic    public function afterExecuteRoute(
    public function afterExecuteRoute(Dispatcher $dispatcher) {
        $this->view->setRenderLevel(
            View::LEVEL_NO_RENDER
        );
        $this->response->setContentType('application/json', 'UTF-8');
        echo json_encode($this->a_jsonResponse, JSON_NUMERIC_CHECK);
    }
}
