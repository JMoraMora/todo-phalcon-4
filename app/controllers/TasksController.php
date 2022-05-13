<?php
declare(strict_types=1);

namespace App\Controllers;

use Phalcon\Mvc\View;
use App\Models\Tasks;
use App\Helpers\JsonResponseHelper;

class TasksController extends ControllerBase
{

    public function getAllTasksAction()
    {
        $tasks = Tasks::find();
        $a_response = json_decode(json_encode($tasks), true);
        $this->a_jsonResponse[JsonResponseHelper::IDX_JSON_RESPONSE_DATA] = $a_response;
    }

    public function getTaskAction()
    {
        $idTask = (int) $this->request->getPost('idTask');
        $task = Tasks::findFirst($idTask);
        $a_response = json_decode(json_encode($task), true);
        $this->a_jsonResponse[JsonResponseHelper::IDX_JSON_RESPONSE_DATA] = $a_response;
    }

    public function saveTaskAction()
    {
        $taks = (string) $this->request->getPost('task');
        $o_task = new Tasks();
        $o_task->task = $taks;
        $result = $o_task->save();
    }

    public function updateTaskAction()
    {
        $idTask = (int) $this->request->getPost('idTask');
        $task = (string) $this->request->getPost('task');
        $o_task = new Tasks();
        $o_task->idTask = $idTask;
        $o_task->task = $task;
        $result = $o_task->update();
    }

    public function deleteTaskAction()
    {
        $idTask = (int) $this->request->getPost('idTask');
        $task = Tasks::findFirst($idTask);
        $task->delete();
    }

}

