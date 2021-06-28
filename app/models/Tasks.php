<?php
namespace App\Models;

class Tasks extends \Phalcon\Mvc\Model
{

    public static function saludo(){
        echo 'holaa desde taks models';
    }

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

    // /**
    //  * Initialize method for model.
    //  */
    // public function initialize()
    // {
    //     $this->setSchema("todotaskphalcon");
    //     $this->setSource("tasks");
    // }

    // /**
    //  * Allows to query a set of records that match the specified conditions
    //  *
    //  * @param mixed $parameters
    //  * @return Tasks[]|Tasks|\Phalcon\Mvc\Model\ResultSetInterface
    //  */
    // public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    // {
    //     return parent::find($parameters);
    // }

    // /**
    //  * Allows to query the first record that match the specified conditions
    //  *
    //  * @param mixed $parameters
    //  * @return Tasks|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
    //  */
    // public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
    // {
    //     return parent::findFirst($parameters);
    // }

}
