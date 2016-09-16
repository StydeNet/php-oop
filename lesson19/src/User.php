<?php

namespace Styde;

class User extends Model
{
    public $id = 5;
    public $table = 'users';

    private $dbPassword = 'secret';

    public function __toString()
    {
        return $this->name;
    }

    public function __sleep()
    {
        return ['id'];
    }

    public function __wakeup()
    {
        
    }
}




