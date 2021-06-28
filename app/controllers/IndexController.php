<?php
declare(strict_types=1);

namespace App\Controllers;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        var_dump(Tasks::find());die;
        echo (Tasks::find());die;
    }

}

