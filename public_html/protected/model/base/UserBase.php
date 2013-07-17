<?php
Doo::loadCore('db/DooModel');

class UserBase extends DooModel{

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 20.
     */
    public $username;

    /**
     * @var char Max length is 32.
     */
    public $password;

    /**
     * @var varchar Max length is 40.
     */
    public $name;

    public $_table = 'user';
    public $_primarykey = 'id';
    public $_fields = array('id','username','password','name');

    public function getVRules() {
        return array(
                'id' => array(
                        array( 'integer' ),
                        array( 'maxlength', 11 ),
                        array( 'optional' ),
                ),

                'username' => array(
                        array( 'maxlength', 20 ),
                        array( 'notnull' ),
                ),

                'password' => array(
                        array( 'maxlength', 32 ),
                        array( 'notnull' ),
                ),

                'name' => array(
                        array( 'maxlength', 40 ),
                        array( 'notnull' ),
                )
            );
    }

}