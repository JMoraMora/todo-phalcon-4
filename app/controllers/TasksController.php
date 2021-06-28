<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\Tasks;

class TasksController extends ControllerBase
{

    public function indexAction()
    {
        $tasks = Tasks::findFirst();
        // $cantTask = Tasks::count();
        var_dump(
            $tasks->dump()
        );
        // echo 'COUNT: ', $cantTask, PHP_EOL;
        // var_dump($tasks);die;
        // $invoice = Invoices::findFirst('inv_id = 4');
    }

}

