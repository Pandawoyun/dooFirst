<?php
Doo::loadCore('db/DooModel');

class TodoitemBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var int Max length is 11.
     */
    public $user_id;

    /**
     * @var varchar Max length is 255.
     */
    public $task;

    /**
     * @var bit Max length is 1.
     */
    public $completed;

    public $_table = 'todoitem';
    public $_primarykey = 'id';
    public $_fields = array('id','user_id','task','completed');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'user_id' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'notnull' ),
                ),

                'task' => array(
                        array( 'maxlength', 255 ),
                        array( 'notnull' ),
                ),

                'completed' => array(
                        array( 'notnull' ),
                )
            );
    }

}