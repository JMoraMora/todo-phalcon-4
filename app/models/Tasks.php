<?php
declare(strict_types=1);

namespace App\Models;

use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Query;

class Tasks extends Model
{

    /**
     *
     * @var integer
     */
    public $idTask;

    /**
     *
     * @var string
     */
    public $task;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("todotaskphalcon");
        $this->setSource("tasks");
    }

}
