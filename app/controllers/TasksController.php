<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\Tasks;
use Phalcon\Mvc\View;
use App\Helpers\JsonResponseHelper;

class TasksController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function getAllAction()
    {
        $tasks = Tasks::find();
        $a_response = json_decode(json_encode($tasks), true);
        $this->a_jsonResponse[JsonResponseHelper::IDX_JSON_RESPONSE_DATA] = $a_response;
    }

}

