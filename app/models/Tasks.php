<?php
declare(strict_types=1);

namespace App\Models;

class Tasks extends \Phalcon\Mvc\Model
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
